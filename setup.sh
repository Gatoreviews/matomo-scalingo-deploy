#!/bin/bash

chmod +x bin/set-licence-key.sh
bin/set-licence-key.sh

chmod +x bin/fetch-purchased-plugins.sh
bin/fetch-purchased-plugins.sh

chmod +x bin/set-matomo-nginx.sh
bin/set-matomo-nginx.sh

php scripts/generate.config.ini.php
