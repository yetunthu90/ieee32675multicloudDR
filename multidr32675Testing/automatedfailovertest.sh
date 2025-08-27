#!/bin/bash

# Define output file
LOGFILE="automatedfailover_output.txt"

# Helper function to extract the 2nd IP from nslookup
get_second_ip() {
    nslookup multiclouddr.trafficmanager.net | \
        awk '/^Address: / {ip=$2} END {print ip}'
}

# Step 1: Print nslookup output with timestamp (10 times)
echo "### Step 1: Initial nslookup at $(date '+%Y-%m-%d %H:%M:%S')" >> "$LOGFILE"
for i in {1..10}; do
    IP=$(get_second_ip)
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] $IP" >> "$LOGFILE"
    sleep 1
done

# Step 2: Delete the web service and log time
echo "### Step 2: Deleting web service at $(date '+%Y-%m-%d %H:%M:%S')" >> "$LOGFILE"
echo "[$(date '+%Y-%m-%d %H:%M:%S')] kubectl delete svc web" >> "$LOGFILE"
kubectl delete svc web >> "$LOGFILE" 2>&1

# Step 3: Print nslookup output again with timestamp (50 times)
echo "### Step 3: Post-deletion nslookup at $(date '+%Y-%m-%d %H:%M:%S')" >> "$LOGFILE"
for i in {1..50}; do
    IP=$(get_second_ip)
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] $IP" >> "$LOGFILE"
    sleep 1
done

echo "### Test completed at $(date '+%Y-%m-%d %H:%M:%S')" >> "$LOGFILE"
