# Example Extension

An example extension for the Pelican Panel. This extension demonstrates how to define views, pages, and permissions within a `manifest.json`.

## 🔍 Description

**Example Extension** is a demonstration module, providing a basic setup including a backend PHP page, a Blade view, and a single permission group.

## 📂 Files Included

| Name                     | Type   |
|--------------------------|--------|
| `Example.php`            | Page   |
| `example-page.blade.php`| Views  |

These files should be placed in their corresponding extension directories as per Pelican Panel's structure.

## 🔐 Permissions

The extension defines the following permission group:

- **Test** (`tabler-terminal-2`)  
  *Label:* `example`  
  *Description:* `Example extension description`  
  *Options:*
  - **read** – `You can read with this permission`

> Icon provided by [Tabler Icons](https://tabler.io/icons)

## 🛠 Manifest Summary

```json
{
  "name": "Example Extension",
  "slug": "example-extension",
  "author": "PalmarHealer",
  "description": "Test Description"
}

```

### Optional Fields

-   **image_url**:  `example_image_link`
    
-   **source_url**: `example_source_code_link`
    
-   **donation_url**: `example_donation_link`
    

## 🚀 Installation

1.  Go to your pelican and navigate in the admin panel to extensions
    
2.  Click on "Install new Extension" and enter this repositories url (you can also use .zip file links)
    
3.  A preview should appear of this extensions. 
    
4.  Click install
    

## 👤 Author

Developed by **PalmarHealer**

For suggestions or issues, please open a GitHub issue.
