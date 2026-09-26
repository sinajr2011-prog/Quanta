# Development

## Frontend
```bash
cd frontend
npm install
npm run dev
```

Production check:
```bash
npm run typecheck
npm run build
```

The frontend is intentionally not wired as the production root in Phase 1. This prevents a half-migrated React application from replacing the stable V49 UI.

## Backend
The current PHP backend continues to run from `backend/`.

Laravel migration target is documented under `backend/laravel-migration/` and is not activated yet.
