#!/bin/bash

# create PV
kubectl apply -f persistentvolume.yaml
sleep 1
# create PVC
kubectl apply -f persistentvolumeclaim.yaml
sleep 1
# create db-configmap
kubectl apply -f db-configmap.yaml
# create DB
kubectl apply -f db.yaml
sleep 5
# create DB Service
kubectl apply -f db-service.yaml
sleep 1
#create APP
kubectl apply -f app.yaml
sleep 5
#create APP service
kubectl apply -f app-service.yaml
sleep 1
#create WEB
kubectl apply -f web.yaml
sleep 5
#create WEB Service
kubectl apply -f web-service.yaml
sleep 1
#create PHPmyadmin
kubectl apply -f phpmyadmin.yaml
sleep 5
#crete PHPmyadmin service
kubectl apply -f phpmyadmin-service.yaml
kubectl get pods
kubectl get svc
