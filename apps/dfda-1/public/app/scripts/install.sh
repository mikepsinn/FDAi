#!/bin/bash
# shellcheck disable=SC2006
# shellcheck disable=SC2086
set -e
set -o errexit  # Exit on most errors (see the manual)
set -o nounset  # Disallow expansion of unset variables
set -o pipefail # Use last non-zero exit code in a pipeline
PARENT_SCRIPT_PATH="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)/$(basename "${BASH_SOURCE[0]}")" && SCRIPT_FOLDER=$(dirname ${PARENT_SCRIPT_PATH})
# shellcheck source=./log_start.sh
cd "${SCRIPT_FOLDER}" && cd .. && export IONIC_PATH="$PWD" && source "$IONIC_PATH"/scripts/log_start.sh "${BASH_SOURCE[0]}"
# shellcheck source=./no-root.sh
source "$SCRIPT_FOLDER"/no-root.sh
# shellcheck source=./nvm.sh
source "$SCRIPT_FOLDER"/nvm.sh 16.13.0
npm install npm@latest -g
set -x && npm install && set +x
npm install typescript http-server -g
set -e
npm run configure:app
# shellcheck source=./log_start.sh
source "$IONIC_PATH"/scripts/log_end.sh "${BASH_SOURCE[0]}"
