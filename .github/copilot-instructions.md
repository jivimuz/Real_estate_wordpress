# Real Estate WordPress Website

## Project Goal

Build a custom WordPress website based on this Figma design:

https://www.figma.com/design/HML3HzG4uUqTON8POFr8mH/Real-Estate-Business-Website-UI-Template---Dark-Theme-%257C-Produce-UI--Community-?node-id=45-2&t=TLQCFOtQPCIAVTyc-0

The goal is to reproduce the Figma design as closely as possible in WordPress.
 

Home:
https://www.figma.com/design/HML3HzG4uUqTON8POFr8mH/Real-Estate-Business-Website-UI-Template---Dark-Theme-%7C-Produce-UI--Community-?node-id=46-304&t=VdWPxOr2lPLEnpD1-4

about us:
https://www.figma.com/design/HML3HzG4uUqTON8POFr8mH/Real-Estate-Business-Website-UI-Template---Dark-Theme-%7C-Produce-UI--Community-?node-id=89-5151&t=VdWPxOr2lPLEnpD1-4

properties
https://www.figma.com/design/HML3HzG4uUqTON8POFr8mH/Real-Estate-Business-Website-UI-Template---Dark-Theme-%7C-Produce-UI--Community-?node-id=97-7288&t=VdWPxOr2lPLEnpD1-4

properties detail:
https://www.figma.com/design/HML3HzG4uUqTON8POFr8mH/Real-Estate-Business-Website-UI-Template---Dark-Theme-%7C-Produce-UI--Community-?node-id=102-8754&t=VdWPxOr2lPLEnpD1-4


Service:
https://www.figma.com/design/HML3HzG4uUqTON8POFr8mH/Real-Estate-Business-Website-UI-Template---Dark-Theme-%7C-Produce-UI--Community-?node-id=104-10350&t=VdWPxOr2lPLEnpD1-4

Contact:
https://www.figma.com/design/HML3HzG4uUqTON8POFr8mH/Real-Estate-Business-Website-UI-Template---Dark-Theme-%7C-Produce-UI--Community-?node-id=104-12305&t=VdWPxOr2lPLEnpD1-4



## Important

This is a CUSTOM WORDPRESS THEME.

Do NOT use:

* Elementor
* Divi
* WPBakery
* Other page builders
* React
* Vue
* Tailwind
* Bootstrap
* Unnecessary frontend frameworks

Use:

* WordPress
* PHP
* HTML5
* CSS3
* Vanilla JavaScript

The project should work without npm or a frontend build process unless explicitly required later.

## Development Approach

Implement the website incrementally.

Do NOT build the entire website in one step.

Recommended order:

1. WordPress theme foundation
2. Global design variables
3. Header/navigation
4. Hero section
5. Search/filter section
6. Property cards
7. Featured properties
8. About section
9. Services
10. Testimonials
11. CTA
12. Footer
13. Responsive refinement
14. Final visual comparison

Complete and verify each section before moving to the next one.

## Figma Is the Source of Truth

The Figma design is the primary visual reference.

Match:

* Layout
* Width
* Height
* Spacing
* Typography
* Font weight
* Font size
* Line height
* Colors
* Backgrounds
* Borders
* Border radius
* Shadows
* Images
* Icons
* Alignment
* Responsive behavior

Do not invent visual elements that are not present in the design.

If a design detail is unclear, keep the implementation simple rather than inventing a complex solution.

## Theme Structure

Prefer this structure:

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

Adjust the structure if the design requires it.

Keep PHP templates modular.

Do not put the entire homepage into one huge PHP file.

## WordPress Best Practices

Use WordPress APIs and functions correctly.

Prefer:

* `get_header()`
* `get_footer()`
* `get_template_part()`
* `wp_enqueue_style()`
* `wp_enqueue_script()`
* `wp_nav_menu()`
* `get_template_directory_uri()`
* `esc_url()`
* `esc_html()`
* `esc_attr()`

Do not modify WordPress core files.

Do not hardcode URLs when a WordPress function should be used.

Escape dynamic output properly.

## CSS

Use CSS variables for the design system.

Example:

```css
:root {
    --color-background: #000;
    --color-surface: #111;
    --color-text: #fff;
    --color-muted: #999;
    --color-primary: #000;

    --container-width: 1200px;
    --radius-sm: 8px;
    --radius-md: 12px;
    --radius-lg: 20px;
}
```

Replace these values with the actual values from the Figma design.

Prefer:

* Flexbox
* CSS Grid
* CSS variables
* Responsive media queries

Avoid unnecessary CSS complexity.

Use descriptive class names.

Example:

```text
.hero
.hero__content
.hero__title
.hero__description
.property-card
.property-card__image
.property-card__content
```

Avoid generic names such as:

```text
.box
.item
.container2
.test
```

## Responsive Design

The website must work on:

* Desktop
* Tablet
* Mobile

Do not simply scale down the desktop layout.

Implement responsive behavior intentionally.

Pay attention to:

* Navigation
* Mobile menu
* Hero layout
* Typography
* Property grids
* Cards
* Images
* Buttons
* Section spacing

Use CSS media queries.

## JavaScript

Use vanilla JavaScript only.

Keep JavaScript minimal.

Use it only where interaction is required, such as:

* Mobile navigation
* Sliders/carousels if required
* Simple filters
* UI interactions

Do not introduce jQuery unless there is a specific reason.

## Images

Use the actual images/assets from the Figma design whenever possible.

Store local assets in:

`assets/images/`

Do not replace important Figma assets with random images unless the original asset is unavailable.

## Dynamic WordPress Data

Initially focus on the visual implementation.

Do NOT create:

* Custom Post Types
* ACF fields
* REST APIs
* Complex database structures
* Property management systems

unless explicitly requested.

For the first implementation, static/mock content is acceptable where necessary.

When dynamic properties are required later, implement them using WordPress-native architecture.

## AI Agent Workflow

Before modifying files:

1. Inspect the existing project.
2. Understand the current code.
3. Identify the smallest change required.
4. Implement only the requested feature.
5. Avoid rewriting unrelated code.

When given a Figma screenshot:

1. Analyze the section.
2. Identify its structure.
3. Identify typography, spacing, colors and dimensions.
4. Implement it using the existing theme architecture.
5. Make it responsive.
6. Do not modify unrelated sections.

When given a screenshot of the current implementation:

Compare it with the Figma reference.

Focus on:

* spacing
* typography
* sizing
* alignment
* colors
* borders
* radius
* image sizing/cropping
* responsive behavior

Then make targeted fixes.

## Code Quality

Prefer simple, readable code.

Avoid over-engineering.

Do not create abstractions unless they provide real value.

Do not duplicate large amounts of markup.

Keep reusable sections in `template-parts`.

Do not add dependencies unless necessary.

## Verification

After implementing a feature, check:

* PHP syntax
* WordPress errors
* Browser console errors
* Broken images
* Broken links
* Desktop layout
* Tablet layout
* Mobile layout

Do not claim pixel-perfect accuracy unless the implementation has been visually compared with the Figma reference.

## Agent Behavior

When asked to implement something:

* Inspect first.
* Explain briefly what you will change.
* Make the changes.
* Keep changes focused.
* Report the files changed.
* Mention anything that requires manual verification.

Do not ask unnecessary questions when the requirement is clear.

Do not implement unrelated improvements.

Keep responses concise.
