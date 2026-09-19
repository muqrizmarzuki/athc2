import re

with open("/home/muqriz/personal/ATHC2/raw_template/index-2.html", "r", encoding="utf-8") as f:
    content = f.read()

content = re.sub(r'src=["\']assets/([^"\']+)["\']', r'src="{{ asset(\'template2_assets/\1\') }}"', content)
content = re.sub(r'href=["\']assets/([^"\']+)["\']', r'href="{{ asset(\'template2_assets/\1\') }}"', content)
content = re.sub(r'data-background=["\']assets/([^"\']+)["\']', r'data-background="{{ asset(\'template2_assets/\1\') }}"', content)

start = content.find('<body class="white-bg">')
end = content.find('<!-- back to top start -->')

body_inner = content[start+len('<body class="white-bg">'):end]

# Remove mouseCursor and preloader duplicate from body since layout handles it
body_inner = re.sub(r'<!-- Mouse Cursor\s*-->\s*<div class="mouseCursor cursor-outer"></div>\s*<div class="mouseCursor cursor-inner"><span>Drag</span></div>', '', body_inner)
body_inner = re.sub(r'<!-- Pre-Loader -->\s*<div class="preloader"></div>', '', body_inner)

final_view = "@extends('layouts.app2')\n\n@section('content')\n" + body_inner.strip() + "\n@endsection\n"

with open("/home/muqriz/personal/ATHC2/resources/views/pages/mockup2.blade.php", "w", encoding="utf-8") as f:
    f.write(final_view)

print("mockup2.blade.php created successfully!")
