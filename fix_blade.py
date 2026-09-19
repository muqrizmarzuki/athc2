with open("/home/muqriz/personal/ATHC2/resources/views/pages/mockup2.blade.php", "r", encoding="utf-8") as f:
    content = f.read()

fixed_content = content.replace(r"{{ asset(\'", "{{ asset('").replace(r"\') }}", "') }}")

with open("/home/muqriz/personal/ATHC2/resources/views/pages/mockup2.blade.php", "w", encoding="utf-8") as f:
    f.write(fixed_content)

print("Escaped backslashes fixed!")
