# HealthPress Lite

A lightweight, modern healthcare and business WordPress theme built with Tailwind CSS.

---

## Features

- Responsive Design
- Tailwind CSS Integration
- Custom Logo Support
- Custom Navigation Menus
- Blog Support
- WordPress Theme Customizer
- Gutenberg Ready
- Lightweight & Fast

---

## Installation

1. Download the theme.
2. Upload it to:

```bash
wp-content/themes/
```

3. Activate it from:

**WordPress Admin → Appearance → Themes**

---

## Development Setup

Install dependencies:

```bash
npm install
```

Run Tailwind CSS watcher:

```bash
npx @tailwindcss/cli -i ./assets/css/input.css -o ./assets/css/output.css --watch
```

Build production CSS:

```bash
npx @tailwindcss/cli -i ./assets/css/input.css -o ./assets/css/output.css --minify
```

---

# WordPress Function Notes

## Theme Setup Functions

| Function | Description |
|---|---|
| `add_theme_support()` | Enables theme features like logo, title-tag, thumbnails |
| `register_nav_menus()` | Registers menu locations |
| `add_action()` | Hooks custom functions into WordPress |

---

## Logo Functions

| Function | Description |
|---|---|
| `has_custom_logo()` | Checks if custom logo exists |
| `the_custom_logo()` | Displays uploaded logo |

---

## Site Information Functions

| Function | Description |
|---|---|
| `bloginfo()` | Prints site information directly |
| `get_bloginfo()` | Returns site information |

---

## Header Functions

| Function | Description |
|---|---|
| `language_attributes()` | Adds language attributes to `<html>` |
| `wp_head()` | Loads styles/scripts inside `<head>` |

---

## Body Functions

| Function | Description |
|---|---|
| `body_class()` | Adds body classes automatically |

---

## Menu Functions

| Function | Description |
|---|---|
| `wp_nav_menu()` | Displays WordPress menus |

---

## Footer Functions

| Function | Description |
|---|---|
| `wp_footer()` | Loads footer scripts |

---

## Customizer Functions

| Function | Description |
|---|---|
| `get_theme_mod()` | Gets Customizer saved values |
| `add_section()` | Creates Customizer section |
| `add_setting()` | Stores Customizer values |
| `add_control()` | Creates Customizer input fields |

---

## Security Functions

| Function | Description |
|---|---|
| `esc_html()` | Escapes text safely |
| `esc_url()` | Escapes URLs safely |

---

## Translation Functions

| Function | Description |
|---|---|
| `__()` | Makes text translatable |

---

## File Path Functions

| Function | Description |
|---|---|
| `get_template_directory_uri()` | Gets theme folder URL |
| `get_stylesheet_uri()` | Gets main stylesheet URL |

---

## Template Functions

| Function | Description |
|---|---|
| `get_header()` | Includes `header.php` |
| `get_footer()` | Includes `footer.php` |

---

# WordPress Hooks Used

## 1. `after_setup_theme`

Used for theme initialization.

### Purpose:
- Enable theme supports
- Register menus
- Setup translations

Example:

```php
add_action('after_setup_theme', 'healthpress_setup');
```

Used with:
- `add_theme_support()`
- `register_nav_menus()`

---

## 2. `wp_enqueue_scripts`

Used for loading CSS and JS files.

### Purpose:
- Enqueue styles
- Enqueue scripts
- Manage dependencies
- Control load location

Example:

```php
add_action('wp_enqueue_scripts', 'healthpress_assets');
```

Used with:
- `wp_enqueue_style()`
- `wp_enqueue_script()`

Flow:

```text
functions.php → wp_enqueue_scripts → wp_head()/wp_footer()
```

---

## 3. `customize_register`

Used for adding Customizer options.

### Purpose:
- Footer settings
- Social links
- Theme custom options

Example:

```php
add_action('customize_register', 'healthpress_customize_register');
```

Used with:
- `add_section()`
- `add_setting()`
- `add_control()`

Flow:

```text
Customizer opens → hook runs → custom fields load
```

---

## 4. `wp_head`

Placed inside `header.php`

### Purpose:
- Prints styles
- Prints scripts
- Plugin hooks
- SEO meta tags

Example:

```php
<?php wp_head(); ?>
```

Important:
Required in every WordPress theme.

---

## 5. `wp_footer`

Placed inside `footer.php`

### Purpose:
- Prints footer scripts
- Plugin JavaScript
- Analytics
- Deferred scripts

Example:

```php
<?php wp_footer(); ?>
```

Important:
Required in every WordPress theme.

---

## Hook Execution Order

```text
1. after_setup_theme   → Setup theme
2. wp_enqueue_scripts  → Register assets
3. wp_head             → Print head assets
4. customize_register  → Load customizer fields
5. wp_footer           → Print footer assets
```

---

## Author

**Abhishek K M**

---

## License

GPL v2 or later