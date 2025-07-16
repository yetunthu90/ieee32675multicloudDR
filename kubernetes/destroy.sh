#!/bin/bash

kubectl delete deployment web
sleep 1
kubectl delete deployment app
sleep 1
kubectl delete deployment database
sleep 1 
kubectl delete svc web
sleep 1
kubectl delete svc app
sleep 1
kubectl delete svc database
sleep 1
kubectl delete configmap init-sql-config
sleep 1
kubectl delete pv dbdata-pv
sleep 1
kubectl delete pvc dbdata