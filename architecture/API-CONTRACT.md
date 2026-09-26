# Quanta API Contract — Phase 1

## Current bridge
`/backend/api.php?action=health`

## Frontend rule
All future API calls must go through `frontend/src/lib/api.ts` (or a typed domain client built on it). Components must not build raw API URLs themselves.

## Contract direction
Future Laravel endpoints should keep stable resource-oriented response shapes so React components do not depend on backend implementation details.
