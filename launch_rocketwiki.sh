#! /bin/bash
# Made by Simon Wilmots

echo
echo "=========================================="
echo "Starting 🚀📖 Rocket Wiki container "
echo "=========================================="
echo

docker-compose up -d --remove-orphans 

xdg-open "http://127.0.0.1:8000" 1>/dev/null 2>&1