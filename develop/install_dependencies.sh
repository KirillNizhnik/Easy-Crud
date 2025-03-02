#!/bin/bash

# Navigate to the script's directory
# shellcheck disable=SC2164
cd "$(dirname "$0")"

echo "🚀 Installing Laravel & Frontend Dependencies..."

# Step 1: Install PHP dependencies using Composer
if [ -f "composer.json" ]; then
    echo "📦 Running composer install..."
    composer install --no-interaction --prefer-dist --optimize-autoloader
else
    echo "❌ composer.json not found! Are you in the Laravel project directory?"
    exit 1
fi

# Step 2: Install Node.js dependencies using NPM
if [ -f "package.json" ]; then
    echo "📦 Running npm install..."
    npm install
else
    echo "❌ package.json not found! Skipping NPM install."
fi

# Step 3: Build frontend assets (if using Vite)
if [ -f "vite.config.js" ]; then
    echo "⚡ Running npm run build..."
    npm run build
else
    echo "⚡ vite.config.js not found! Skipping asset build."
fi

echo "✅ Installation complete!"
