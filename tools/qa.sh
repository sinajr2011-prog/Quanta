#!/usr/bin/env bash
set -euo pipefail
ROOT="$(cd "$(dirname "$0")/.." && pwd)"
cd "$ROOT"
command -v php >/dev/null || { echo "PHP is required"; exit 1; }
mapfile -t PHP_FILES < <(find backend -name '*.php' -type f | sort)
for f in "${PHP_FILES[@]}"; do php -l "$f" >/dev/null; done
for f in backend/api.php backend/upgrade.php backend/config.php frontend/package.json frontend/src/app/App.tsx frontend/src/lib/api.ts; do test -f "$f" || { echo "Missing: $f"; exit 1; }; done
grep -q "ai_action_confirm" backend/api.php
grep -q "research_source_fetch_url" backend/api.php
grep -q '"build"' frontend/package.json
if [[ -d frontend/node_modules ]]; then
  (cd frontend && npm run typecheck)
  (cd frontend && npm run build)
else
  echo "WARN: frontend/node_modules is absent; PHP/source QA passed, frontend build was not executed."
fi
echo "Quanta QA: PASS"
