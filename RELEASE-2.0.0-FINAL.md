# Quanta 2.0.0 FINAL

## Finalization in this release

- Unified production entrypoint and `/api` routing.
- React application is authentication-aware instead of opening a panel from an arbitrary localStorage role.
- Teacher/developer secondary verification returns to the unified application.
- Added controlled AI action confirmation, rejection and history endpoints.
- Added grounded research URL ingestion with private-network protection and size/time limits.
- Added research file ingestion for PDF/TXT/MD/CSV where server PDF extraction is available.
- Added frontend API helpers for authentication, AI action lifecycle and research ingestion.
- Added production README and automated QA script.
- Kept server-side AI credentials out of the frontend.

## Verification

- PHP syntax check: passed for all backend PHP files.
- Frontend production build: requires dependency installation (`npm ci`) in an environment with package access. The current build environment timed out while installing npm dependencies, so no false claim of a completed Vite build is made.
