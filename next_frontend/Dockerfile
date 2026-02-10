# syntax=docker/dockerfile:1.7

# 1) Dependencies (no npm cache kept)
FROM node:18-alpine AS deps
WORKDIR /app
COPY package.json package-lock.json ./
# Use a clean, reproducible install and then purge npm cache
RUN npm ci --legacy-peer-deps --no-audit --no-fund \
 && npm cache clean --force

# 2) Build (also wipe any build caches just in case)
FROM node:18-alpine AS builder
WORKDIR /app
COPY --from=deps /app/node_modules ./node_modules
COPY . .
RUN rm -rf .next node_modules/.cache \
 && npm run build

# 3) Runtime (fresh prod deps; do NOT reuse builder node_modules)
FROM node:18-alpine AS runner
WORKDIR /app
ENV NODE_ENV=production

# Install production deps fresh, then purge npm cache
COPY package.json package-lock.json ./
RUN npm ci --omit=dev --legacy-peer-deps --no-audit --no-fund \
 && npm cache clean --force

# Copy only the artifacts needed at runtime
COPY --from=builder /app/public ./public
COPY --from=builder /app/.next ./.next

EXPOSE 3000
CMD ["npm", "start"]
