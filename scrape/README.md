# bhcha.com/bev — structural scrape

Scraped 2026-10-08 from https://bhcha.com/bev/. This folder holds the site's
structure, links and factual data, for planning a modernized rebuild. The
long descriptive paragraphs are summarized, not copied.

| File | What's in it |
|---|---|
| `README.md` | Sitemap, technical setup, theme notes |
| `structure.md` | Page-by-page outline: headings, sections, what each one covers |
| `data.json` | Every link, document, folder, person, contact and emergency number |

## Sitemap

| Page | URL |
|---|---|
| Home | https://bhcha.com/bev/ |
| About | https://bhcha.com/bev/index.php?id=about |
| Organization | https://bhcha.com/bev/index.php?id=organization |
| Updates | https://bhcha.com/bev/index.php?id=updates |
| Downloads | https://bhcha.com/bev/index.php?id=downloads |
| Contact | https://bhcha.com/bev/index.php?id=contact |

Related apps on the same domain (separate systems, only linked from the site):

- File repository / "BHCHA Cloud": http://bhcha.com/cloud/ (also mirrored at bhcom.org/cloud/)
- Discussion board: http://bhcha.com/board (also bhcom.org/board/)
- Mail server: http://bhcha.com/mail/
- Online accounting: https://bhcom.org/board/index.php?action=agreement

## Technical setup (current site)

- PHP CMS with `index.php?id=<page>` URLs and a `theme/Boom/` theme folder
  (the pattern used by GetSimple CMS).
- Page title format: `<Page> - BHCHA`.
- jQuery 1.8.0, Modernizr, `jquery.mobilemenu.js` (turns the nav into a
  dropdown on small screens), `custom.js`.
- Stylesheets: `style.css` (imports `reset.css` and `layout.css`),
  `responsive.css`, `ie.css` for IE < 9. Icons via FontAwesome.
- 12-column grid classes (`col-7`, `col-5`, `col-12`, `clearfix`).
- Responsive breakpoints: 479px, 767px, 959px, 1279px, 1280–1599px, 1600px+.
- Old IE conditional comments (`ie7`/`ie8`/`ie9` classes on `<html>`).
- Favicon + apple-touch-icons at 60, 76, 120, 152px.
- Header banner image: `theme/Boom/images/slider/header2.png`.
- Chatango chat widget embedded (handle `bhcom`, bottom-left, green `#99cc33`).
- Canonical URL tag points to https://bhcha.com/bev/.

## Theme colors (from style.css)

| Use | Color |
|---|---|
| Accent green (most used) | `#72b626` |
| Chat widget green | `#99cc33`, `#009900` |
| Dark text / backgrounds | `#303030`, `#363636`, `#4e4e4e` |
| Mid grey text | `#666`, `#a6a6a6`, `#aaa` |
| Light borders / panels | `#cfcfcf`, `#dadada`, `#e2e2e2`, `#e9e9e9`, `#efefef` |
| White | `#fff` |

## Page layout (every page)

1. Header: "BHCHA" logo text + full association name (left), phone number (right)
2. Nav bar: Home, About, Organization, Updates, Downloads, Contact
3. Banner image (home page)
4. Page title + main content
5. Footer columns: **Links** (Discussion Board, File Repository, Mail Server,
   Online Accounting) and **Socials** (Join our Forum, Facebook Page, Facebook Group)
6. Chat widget
7. Copyright line "Copyright © 2026 BHCHA", developer credit "MILLAWAVE"
   (http://millawave.net/), back-to-top link
