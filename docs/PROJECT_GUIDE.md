# Project guide

## Structure

- `theme/maison-aube/style.css`: theme metadata and shared responsive design.
- `theme/maison-aube/theme.json`: palette, font choices and global editor settings.
- `theme/maison-aube/functions.php`: enqueue styles and register editable home pattern.
- `theme/maison-aube/patterns/home.html`: native block markup and small custom HTML elements.
- `theme/maison-aube/templates`: front page, post index, single post, page, 404.
- `theme/maison-aube/parts`: header navigation and footer.
- `theme/maison-aube/assets`: original AI-generated WebP photography, self-hosted fonts and frontend script.
- `preview`: static visual companion, not a CMS.
- `blueprint.json`: Playground configuration installing the packaged theme.

## Editing

Use Appearance → Editor. The inserted homepage pattern expands into native groups, headings, paragraphs and image blocks. The menu filters/items, FAQs, hours and call-to-action links use Custom HTML blocks. Adjust those in the code editor. The mobile navigation uses the native WordPress navigation block. Theme editor customizations are stored in the WordPress database; exporting the edited theme is necessary to commit those changes back to GitHub.

The demo has one French-language business site. The portfolio project description is localized separately in French, English, Portuguese and Spanish, matching the existing portfolio language choices.

## Rebuild the ZIP

```sh
cd theme
zip -r ../maison-aube-theme.zip maison-aube
```

Upload the new ZIP, blueprint and preview together when changing assets. The blueprint download URL uses `https://sarabranco.xyz/projects/maison-aube/maison-aube-theme.zip`.

## Before production use

Replace fictional brand copy and illustrative prices/hours with verified client content. Add real business/contact information, legal pages and any needed contact or commerce integration. There is no live ordering, reservation or newsletter backend in this theme. Keep theme code and credentials separate; do not commit WordPress core, uploads, database backups or secrets.

## Verification

See `VALIDATION.md` for the checks performed on the delivered version and remaining limitations.

## Design version 1.1

Premium editorial layout with self-hosted Cormorant Garamond and DM Sans, cream/espresso/forest palette, original concept photography, responsive menu filtering, accessible preview navigation and an explicit inquiry link to Sara. The bakery content remains fictional. There is no ordering or booking backend. See ASSETS.md for visual asset provenance.
