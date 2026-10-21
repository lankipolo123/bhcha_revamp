# BHCHA site (mimic of bhcha.com/bev)

Same layout and URL scheme as the original (`index.php?id=about` etc.).
All data comes from `../scrape/data.json`.

Run from the repo root:

    php -S localhost:8000 -t app

Then open http://localhost:8000

- Banner: drop your banner image at `app/assets/banner.jpg` and it's used automatically.
- Page text: `app/pages/*.php`. Paragraphs are short placeholders; replace them with the real text.
- People, links, documents, contacts: edit `scrape/data.json`.
