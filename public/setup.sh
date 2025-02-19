#!/bin/bash

# Ensure the storage and bootstrap cache directories have correct permissions
chmod -R 775 /app/storage
chmod -R 775 /app/bootstrap/cache

# Optional: Ensure the ownership is correct, typically for web server user (www-data)
chown -R www-data:www-data /app/storage
chown -R www-data:www-data /app/bootstrap/cache
