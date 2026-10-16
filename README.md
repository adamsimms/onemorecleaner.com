# One More Cleaner

Marketing site for [onemorecleaner.com](https://onemorecleaner.com): bilingual (EN/FR) house, office, and steam cleaning services in Greater Montreal.

## Stack

- PHP pages with shared header/footer includes
- Bootstrap 4 (CDN)
- SCSS compiled to `en/media/sass/main.css`
- Quote form via `send_email.php` (PHP `mail()`)
- Deploy to GoDaddy cPanel over FTPS (GitHub Actions)

## Structure

```
en/                 English pages + shared media/
en/media/           CSS, images, fonts, favicons (served from /media/)
fr/                 French pages only (assets use /media/)
.github/workflows/deploy.yml
```

Both locales load assets via `$media_url` (`https://onemorecleaner.com/media/`).

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

## Local development

```bash
php -S localhost:8080 -t en
```

French pages expect assets at `/media/`. For local FR testing, either serve from a parent that maps `media/` to `en/media/`, or temporarily point `$media_url` at your local media path.

Styles live under `en/media/sass/`. Edit `main.scss` and the partials, then compile:

```bash
npx sass en/media/sass/main.scss en/media/sass/main.css --no-source-map
```

Commit the compiled CSS with SCSS changes so deploy stays self-contained.

## Deploy

Pushes to `main` (and manual `workflow_dispatch`) run **Deploy to GoDaddy**.

Live layout:

- `en/` → document root (`public_html/`), including shared `media/`
- `en/` without `media/` → `public_html/en/`
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
