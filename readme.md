# Estatein Real Estate WordPress Theme

Custom WordPress theme for the Estatein real estate website, implemented with PHP, HTML5, CSS3, and vanilla JavaScript.

The visual reference is the [Estatein Figma design](https://www.figma.com/design/HML3HzG4uUqTON8POFr8mH/Real-Estate-Business-Website-UI-Template---Dark-Theme-%257C-Produce-UI--Community-?node-id=45-2).

## Pages

- Home
- About Us
- Properties
- Property Detail
- Services
- Contact Us

Each page uses a dedicated WordPress template and reusable files under `template-parts/`.

## Current UI

![Current Home page](docs/home-current.png)

The screenshot above is a current local render of the Home page. It is a development reference and not a claim of final pixel-perfect parity with Figma.

## Theme Structure

```text
wp-content/themes/real-estate/
├── style.css
├── functions.php
├── header.php
├── footer.php
├── front-page.php
├── page-about-us.php
├── page-properties.php
├── page-property-detail.php
├── page-services.php
├── page-contact.php
├── assets/
│   ├── images/
│   └── js/navigation.js
└── template-parts/
```

## Local Development

The project requires a local PHP and MySQL environment with WordPress configured in `wp-config.php`.

Start the local server from the repository root:

```bash
php -S localhost:8080
```

Open [http://localhost:8080/](http://localhost:8080/) in a browser.

If WordPress is using default permalinks, pages can also be opened with their page IDs. Set **Settings → Permalinks → Post name** in WordPress to use readable URLs such as `/about-us/` and `/properties/`.

## Project Rules

- Use the custom theme only.
- Do not use Elementor or another page builder.
- Do not add React, Vue, Tailwind, Bootstrap, or an npm build process.
- Keep dynamic property data out of the database until it is explicitly required.
- Use WordPress APIs and escape dynamic output.
- Keep Figma assets local under `assets/images/`.

## Verification

Useful checks after theme changes:

```bash
php -l wp-content/themes/real-estate/functions.php
php -l wp-content/themes/real-estate/header.php
php -l wp-content/themes/real-estate/page-about-us.php
```

The current implementation also includes responsive checks for desktop and mobile page layouts.
