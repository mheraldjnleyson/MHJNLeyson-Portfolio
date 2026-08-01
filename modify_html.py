import os

html_path = "c:/xampp/htdocs/MHJNL/index.html"

if not os.path.exists(html_path):
    print("Error: index.html not found")
    exit(1)

with open(html_path, "r", encoding="utf-8") as f:
    content = f.read()

# 1. Replace clinic action block to add description button
clinic_target = """                            <div class="proj-actions">
                                <a href="https://github.com/mheraldjnleyson/Medical-Clinic-Record-Management-System"
                                    target="_blank" rel="noopener" class="proj-link" id="clinic-gh">
                                    <i class="fa-brands fa-github"></i> GitHub
                                </a>
                            </div>"""

clinic_replacement = """                            <div class="proj-actions">
                                <a href="https://github.com/mheraldjnleyson/Medical-Clinic-Record-Management-System"
                                    target="_blank" rel="noopener" class="proj-link" id="clinic-gh">
                                    <i class="fa-brands fa-github"></i> GitHub
                                </a>
                                <a href="#" class="proj-link proj-desc-btn" data-project="clinic">
                                    <i class="fa-solid fa-circle-info"></i> Description
                                </a>
                            </div>"""

# 2. Replace inventory action block to add description button
inventory_target = """                            <div class="proj-actions">
                                <a href="https://github.com/mheraldjnleyson/Web-Based-Intranet-Inventory-and-Tracking-Management-System-"
                                    target="_blank" rel="noopener" class="proj-link" id="inv-gh">
                                    <i class="fa-brands fa-github"></i> GitHub
                                </a>
                            </div>"""

inventory_replacement = """                            <div class="proj-actions">
                                <a href="https://github.com/mheraldjnleyson/Web-Based-Intranet-Inventory-and-Tracking-Management-System-"
                                    target="_blank" rel="noopener" class="proj-link" id="inv-gh">
                                    <i class="fa-brands fa-github"></i> GitHub
                                </a>
                                <a href="#" class="proj-link proj-desc-btn" data-project="inventory">
                                    <i class="fa-solid fa-circle-info"></i> Description
                                </a>
                            </div>"""

# 3. Add Modal HTML before </body> tag
modal_html = """    <!-- Description Modal -->
    <div id="description-modal" class="modal">
        <div class="modal-overlay"></div>
        <div class="modal-wrapper">
            <button class="modal-close" aria-label="Close modal">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <div class="modal-content">
                <!-- Content dynamically populated by JS -->
            </div>
        </div>
    </div>

</body>"""

# Perform Clinic replacement
if clinic_target in content:
    content = content.replace(clinic_target, clinic_replacement)
    print("Successfully replaced Clinic project action buttons.")
else:
    # Try with single quotes or normalized spacing if double quotes mismatch
    print("Warning: Clinic target not found. Checking if already replaced.")

# Perform Inventory replacement
if inventory_target in content:
    content = content.replace(inventory_target, inventory_replacement)
    print("Successfully replaced Inventory project action buttons.")
else:
    print("Warning: Inventory target not found. Checking if already replaced.")

# Perform Modal replacement
if "</body>" in content and "description-modal" not in content:
    content = content.replace("</body>", modal_html)
    print("Successfully added Modal HTML structure.")
else:
    print("Warning: body tag not found or modal already exists.")

# Write back to index.html
with open(html_path, "w", encoding="utf-8") as f:
    f.write(content)

print("Done modify_html.py execution.")
