html_path = "c:/xampp/htdocs/MHJNL/index.html"

with open(html_path, "r", encoding="utf-8") as f:
    content = f.read()

print("Clinic Description Button count:", content.count('data-project="clinic"'))
print("Inventory Description Button count:", content.count('data-project="inventory"'))
print("description-modal count:", content.count('id="description-modal"'))
