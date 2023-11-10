#!/bin/bash
set -e

source .venv/bin/activate
uvicorn main:app --reload --host=0.0.0.0 --port=7777 --workers 2