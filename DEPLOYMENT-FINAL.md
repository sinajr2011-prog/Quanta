# Quanta 1.1 FINAL — Deployment

## 1. Server requirements
- PHP 8.1+ for the current PHP layer; target Laravel migration is PHP 8.3+ when Laravel 13 is adopted.
- MySQL/MariaDB compatible with the existing migrations.
- Node.js/npm only needed on the build machine, not necessarily on a PHP-only production host.

## 2. Environment
Set these as server-side environment variables:
`QUANTA_DB_HOST`, `QUANTA_DB_NAME`, `QUANTA_DB_USER`, `QUANTA_DB_PASS`, `QUANTA_AI_URL`, `QUANTA_AI_KEY`, `QUANTA_AI_MODEL`, `QUANTA_SESSION_TTL`, `QUANTA_ALLOWED_ORIGINS`.

Never commit real secrets.

## 3. Database
1. Backup the production database.
2. Apply migrations `001` through `006` in order, or run the project's upgrade script once in a controlled environment.
3. Verify tables before enabling user traffic.
4. Disable/delete public access to `backend/upgrade.php` after migration.

## 4. Frontend
On a build-capable machine:
```bash
cd frontend
npm ci
npm run typecheck
npm run build
```
Deploy the generated `frontend/dist` output according to the hosting layout. Keep the PHP API under `backend/`.

## 5. Smoke test
Test each role: developer, principal, vice principal, teacher, parent, student.
Test login, logout, one read, one write, communication, AI, Research Lab and permission boundaries.

## 6. HTTPS
Production should use HTTPS. Confirm HSTS appears only over HTTPS and verify CORS against the exact production origin.
