# Real Estate WordPress Website

## Project Overview

This project is a custom WordPress theme implementation based on this Figma design:

https://www.figma.com/design/HML3HzG4uUqTON8POFr8mH/Real-Estate-Business-Website-UI-Template---Dark-Theme-%257C-Produce-UI--Community-?node-id=45-2&t=TLQCFOtQPCIAVTyc-0

The goal is to reproduce the Figma design as accurately as possible using a custom WordPress theme.

Do NOT use Elementor or another page builder.

## Tech Stack

* WordPress
* PHP
* HTML5
* CSS3
* Vanilla JavaScript
* MySQL through WordPress APIs when dynamic data is needed

Avoid unnecessary dependencies.

Do not introduce React, Vue, Tailwind, Bootstrap, npm, or other frontend frameworks unless explicitly requested.

The project should work without a frontend build process.

## Development Principles

* Keep the code simple and maintainable.
* Use WordPress best practices.
* Use semantic HTML.
* Use reusable PHP template parts.
* Avoid duplicated markup and logic.
* Escape WordPress output properly.
* Enqueue CSS and JavaScript through `functions.php`.
* Do not put large amounts of CSS or JavaScript directly inside PHP templates.
* Do not use inline styles unless there is a strong reason.
* Keep JavaScript minimal and use vanilla JavaScript.
* Do not modify WordPress core files.
* Do not install plugins unless explicitly requested.

## Theme Structure

Use a structure similar to:

real-estate/
├── style.css
├── functions.php
├── index.php
├── front-page.php
├── header.php
├── footer.php
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
└── template-parts/
├── hero.php
├── properties.php
├── about.php
├── services.php
├── testimonials.php
└── cta.php

The structure can be adjusted when the Figma design requires it.

## Figma Implementation

The Figma design is the primary visual reference.

When implementing a section, pay attention to:

1. Layout
2. Container width
3. Spacing
4. Typography
5. Font weight
6. Font size
7. Line height
8. Colors
9. Borders
10. Border radius
11. Shadows
12. Images
13. Icons
14. Alignment
15. Responsive behavior

Do not invent visual elements when they are not present in the reference design.

If a Figma detail is unclear, prefer a simple implementation and ask for clarification rather than creating unnecessary UI.

## Responsive Design

The website must work properly on:

* Desktop
* Tablet
* Mobile

Do not simply shrink the desktop layout.

Implement responsive behavior based on the Figma reference.

Pay particular attention to:

* Navigation
* Hero layout
* Typography
* Grid columns
* Card sizes
* Section spacing
* Image cropping
* Buttons
* Mobile menu

Use CSS media queries and flexible layouts.

Prefer CSS Grid and Flexbox.

## WordPress

Use WordPress APIs and functions where appropriate.

Examples:

* `wp_enqueue_style()`
* `wp_enqueue_script()`
* `get_header()`
* `get_footer()`
* `get_template_part()`
* `wp_nav_menu()`
* `the_title()`
* `the_content()`
* `esc_url()`
* `esc_html()`
* `esc_attr()`

Do not hardcode WordPress URLs when a WordPress function can be used.

## Current Development Strategy

Build the website incrementally.

Recommended order:

1. Theme foundation
2. Global CSS variables
3. Header/navigation
4. Hero section
5. Search/filter section
6. Property cards
7. Featured properties section
8. About section
9. Services section
10. Testimonials
11. CTA
12. Footer
13. Responsive refinement
14. Final visual matching

Do not implement the entire website in one step.

## CSS

Use CSS variables for the main design tokens.

Example:

```css
:root {
    --color-background: #000;
    --color-surface: #111;
    --color-text: #fff;
    --color-muted: #999;
    --color-primary: #xxx;

    --container-width: 1200px;
    --radius-sm: 8px;
    --radius-md: 12px;
    --radius-lg: 20px;
}
```

Replace placeholder values with values taken from the Figma design.

Use a consistent naming convention for CSS classes.

Avoid overly generic class names such as:

```text
.box
.item
.container2
.test
```

Prefer descriptive names such as:

```text
.hero
.hero__content
.hero__title
.property-card
.property-card__image
.property-card__content
```

## Images and Assets

Use the actual assets from the Figma design whenever they are available.

Do not replace important design images with random stock images unless the actual asset is unavailable.

Keep local assets inside:

`assets/images/`

Use optimized image formats when possible.

## AI Development Workflow

Before making significant changes:

1. Inspect the existing files.
2. Understand the current implementation.
3. Make the smallest reasonable change.
4. Do not rewrite working code unnecessarily.
5. Explain what was changed after implementation.

When given a screenshot of the Figma design:

* Analyze the visual structure.
* Identify containers and sections.
* Estimate layout relationships.
* Implement the section.
* Keep the implementation responsive.
* Avoid changing unrelated sections.

When given a screenshot of the current website and the Figma reference:

Compare:

* spacing
* typography
* dimensions
* alignment
* colors
* borders
* radius
* images
* responsive behavior

Then fix only the relevant differences.

## Important Restrictions

Do not:

* Use Elementor.
* Use another page builder.
* Rewrite the whole project unnecessarily.
* Add large frontend frameworks.
* Add unnecessary dependencies.
* Create a complicated architecture for a simple landing page.
* Put everything into one PHP file.
* Generate fake property data unless explicitly requested.
* Create a property database/CPT before it is needed.
* Change the design just because you think it looks better.

The Figma design is the source of truth.

## Dynamic WordPress Features

Initially, focus on the visual implementation.

Do not create custom post types, ACF fields, database structures, REST APIs, or other dynamic systems until requested.

When dynamic property data is required later, design it in a WordPress-native and maintainable way.

## Coding Style

Prefer readable code over clever code.

Keep functions small.

Use clear variable and function names.

Add comments only when they explain something that is not obvious.

Do not add comments for every line.

## Before Finishing a Task

Check:

* PHP syntax
* WordPress function usage
* CSS responsiveness
* JavaScript errors
* Desktop layout
* Mobile layout
* Broken images
* Broken links
* Console errors

Do not claim that something is pixel-perfect unless it has actually been visually compared against the reference.

## Communication

When working on a task:

1. Briefly explain what you are going to change.
2. Make the changes.
3. List the files changed.
4. Mention anything that still needs manual verification.

Keep explanations concise.
