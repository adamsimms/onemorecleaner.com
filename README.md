# One More Cleaner

Marketing site for [onemorecleaner.com](https://onemorecleaner.com): bilingual (EN/FR) house, office, and steam cleaning services in Greater Montreal.

## Stack

- PHP pages with shared header/footer includes
- Bootstrap 4 (CDN)
- SCSS compiled to `media/sass/main.css`
- Quote form via `send_email.php` (PHP `mail()`)
- Deploy to GoDaddy cPanel over FTPS (GitHub Actions)

## Structure

```
en/   English site (also published at the document root)
fr/   French site (published at /fr/)
.github/workflows/deploy.yml
```

### English routes

| Path | Page |
|------|------|
| `/` or `/en/` | Home |
| `/house-cleaning-services-montreal/` | Residential |
| `/office-cleaning-montreal/` | Office |

### French routes

| Path | Page |
|------|------|
| `/fr/` | Accueil |
| `/fr/entretien-menager-residentiel-montreal/` | Résidentiel |
| `/fr/entretien-menager-bureaux-montreal/` | Bureaux |

Each locale keeps its own `header_inc.php`, `footer_inc.php`, `send_email.php`, and `media/` assets.

## Local development

Serve either locale with PHP’s built-in server (or any local PHP host):

```bash
php -S localhost:8080 -t en
# or
php -S localhost:8080 -t fr
```

Styles live under `en/media/sass/` and `fr/media/sass/`. Edit `main.scss` and the partials, then compile to `main.css` (for example with [Prepros](https://prepros.io/) or `sass`). Commit the compiled CSS with SCSS changes so deploy stays self-contained.

`base_url` in `header_inc.php` points at production (`https://onemorecleaner.com/`). Adjust locally if asset paths break under a subdirectory.

## Deploy

Pushes to `main` (and manual `workflow_dispatch`) run **Deploy to GoDaddy**.

Live layout:

- `en/` → document root (`public_html/`)
- `en/` → `public_html/en/`
- `fr/` → `public_html/fr/`

Required Actions secrets:

| Secret | Purpose |
|--------|---------|
| `FTP_SERVER` | FTP host (e.g. `ftp.onemorecleaner.com`) |
| `FTP_USERNAME` | cPanel FTP user |
| `FTP_PASSWORD` | cPanel FTP password |
| `FTP_SERVER_DIR` | Remote web root relative to the FTP home (often `public_html/`) |

See comments in `.github/workflows/deploy.yml` for FTPS / certificate notes.

## Contact

Quote requests go to `jimmy@onemorecleaner.com` via `send_email.php`.
