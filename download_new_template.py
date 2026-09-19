import os
import re
import urllib.parse
import requests
from bs4 import BeautifulSoup

BASE_URL = "http://www.cmswebs.cn/demo/13748/"
START_URL = "http://www.cmswebs.cn/demo/13748/index-2.html"
OUTPUT_DIR = "/home/muqriz/personal/ATHC2/raw_template"

session = requests.Session()
session.headers.update({
    "User-Agent": "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, Gecko) Chrome/120.0.0.0 Safari/537.36"
})

downloaded_urls = {}

def get_local_path(url):
    parsed = urllib.parse.urlparse(url)
    path = parsed.path
    
    if path.startswith("/demo/13748/"):
        rel_path = path[len("/demo/13748/"):]
    else:
        domain_slug = parsed.netloc.replace(":", "_").replace(".", "_")
        rel_path = os.path.join("assets_external", domain_slug, path.lstrip("/"))
        
    if not rel_path or rel_path == "/":
        rel_path = "index-2.html"
        
    return rel_path

def download_file(url):
    if not url or url.startswith("data:") or url.startswith("javascript:") or url.startswith("#") or url.startswith("mailto:") or url.startswith("tel:"):
        return None
        
    url = urllib.parse.urljoin(START_URL, url)
    
    if url in downloaded_urls:
        return downloaded_urls[url]
        
    local_rel_path = get_local_path(url)
    local_full_path = os.path.join(OUTPUT_DIR, local_rel_path)
    
    downloaded_urls[url] = local_rel_path
    
    if os.path.exists(local_full_path):
        return local_rel_path
        
    try:
        print(f"Downloading: {url} -> {local_rel_path}")
        resp = session.get(url, timeout=15)
        if resp.status_code == 200:
            os.makedirs(os.path.dirname(local_full_path), exist_ok=True)
            with open(local_full_path, "wb") as f:
                f.write(resp.content)
            return local_rel_path
        else:
            print(f"Failed ({resp.status_code}): {url}")
    except Exception as e:
        print(f"Error {url}: {e}")
        
    return None

def main():
    print(f"Fetching primary page: {START_URL}")
    resp = session.get(START_URL, timeout=15)
    if resp.status_code != 200:
        print("Failed to load primary page")
        return
        
    soup = BeautifulSoup(resp.content, "html.parser")
    
    # Collect assets (css, js, img, source, link)
    for tag in soup.find_all(["link", "script", "img", "source", "a"]):
        for attr in ["href", "src", "data-src"]:
            val = tag.get(attr)
            if val and not val.startswith("#") and not val.startswith("javascript:"):
                # If HTML link to another page on same domain, download it too
                if tag.name == "a" and attr == "href":
                    full_url = urllib.parse.urljoin(START_URL, val)
                    if full_url.startswith(BASE_URL) and full_url.endswith(".html"):
                        local_path = download_file(full_url)
                        if local_path:
                            tag[attr] = local_path
                else:
                    local_path = download_file(val)
                    if local_path:
                        tag[attr] = local_path

    # Save rewritten main HTML
    os.makedirs(OUTPUT_DIR, exist_ok=True)
    main_html_path = os.path.join(OUTPUT_DIR, "index-2.html")
    with open(main_html_path, "w", encoding="utf-8") as f:
        f.write(str(soup))
        
    print("Download complete!")

if __name__ == "__main__":
    main()
