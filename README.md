# BHCHA website revamp

A modern, mobile-friendly redesign concept for the Beverly Hills Community
Homeowners Association site (currently at https://bhcha.com/bev/). This is
an unofficial redesign proposal, not the live site.

Plain PHP 8, no database, no framework, no build step. Works on any shared
host that runs PHP.

## Run locally

```
php -S localhost:8000
```

Then open http://localhost:8000.

## Updating content

Almost everything that changes lives in **`includes/data.php`**:

- board members, committee heads, management team (`null` name = "To be announced")
- announcements, presentations, events, board meetings, projects, articles
- governing documents and BHCHA Cloud folder links
- office addresses, emails, emergency numbers

Longer page text (history, mission, about) is written directly in the page files.

## Layout

```
index.php  about.php  organization.php  updates.php  downloads.php  contact.php
includes/  bootstrap.php (helpers)  data.php  header.php  footer.php  rail.php
assets/    css/style.css  js/main.js
```

Supports light and dark mode automatically, following the visitor's system setting.
