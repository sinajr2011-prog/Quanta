# Quanta 2.0 → Final Master Plan

## Product thesis
Quanta is an AI-native School Operating System: school management, learning intelligence, research, communication and permission-aware AI are one product rather than disconnected modules.

## Non-negotiables
- No fake buttons, placeholder analytics or simulated production flows.
- Every AI action is permission-checked, auditable and confirmed when it changes state.
- School tenant isolation is enforced server-side.
- Human approval remains required for consequential publishing/management actions.
- Provider-agnostic AI layer; model/provider failures must degrade gracefully.
- Every major module has API, database, UI, tests and deployment notes.

## Delivery tracks
1. Foundation: architecture, auth, RBAC/ABAC, migrations, API contracts, observability.
2. Intelligence Core: personal context, memory, tool calling, action audit.
3. Quanta Pulse: school/class/student analytics and early signals.
4. Learning Intelligence: knowledge graph, concept mastery, learning maps.
5. Research Lab 2.0: document ingestion, URL ingestion, chunking, embeddings/vector retrieval, citations, artifact generation.
6. Copilots: student, teacher, parent, management.
7. Simulation & engagement: simulations, XP, quests, progress milestones.
8. Communication: moderated messaging, notification intelligence, media/events.
9. Platform: API v1, plugins, webhooks, multi-school tenancy, installer.
10. Production: tests, security, backup/restore, performance, deployment automation, documentation.
11. Open-source release: license, trademark policy, contribution workflow, security policy and release engineering.

## Current implementation in this release
- `008_quanta_intelligence_core.sql`
- AI memory storage scoped to user + school
- auditable AI action proposals
- school pulse API
- learning map API backed by concept/mastery tables
- service-layer implementation under `backend/app/Intelligence`

## Next implementation gate
Before adding large UI surfaces, run migrations on a real MySQL instance and add automated tests for tenant isolation, permissions and AI action authorization. Then implement the Intelligence Hub UI against these real endpoints.
