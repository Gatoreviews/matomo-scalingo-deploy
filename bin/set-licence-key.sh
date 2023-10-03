#!/bin/bash

echo "Setting licence key..."

if [[ -n "$MATOMO_LICENSE_KEY" ]]; then
  php console licence:set --licenseKey="$MATOMO_LICENSE_KEY"
fi