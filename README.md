# The ISO/IEC/IEEE 32675 Standard for Multi-Cloud Disaster Recovery

## Abstract

Businesses adopt multi-cloud strategies to improve resilience, reduce vendor lock-in, and ensure business continuity. Although a growing demand for using multi-cloud infrastructures, there is no dedicated international standard for Disaster Recovery (DR) in multi-cloud contexts. This research aims to investigate whether the ISO/IEC/IEEE 32675 DevOps standard can improve the efficiency of multi-cloud disaster recovery practices. The hypothesis of this research is that the application of the ISO/IEC/IEEE 32675 DevOps standard can provide a structured framework to improve DR processes in multi-cloud environments. To prove this, a framework was developed in alignment with the ISO/IEC/IEEE 32675 DevOps standard using Infrastructure as Code, CI/CD pipelines, automated failover and fallback, cluster backup and restore mechanisms with cross-cloud synchronization. The effectiveness of the framework was measured by metrics such as Recovery Time Objective (RTO), Recovery Point Objective (RPO), cross-cloud interoperability, and compliance coverage. Based on the metric results and analysis, regulating multi-cloud disaster recovery through the ISO/IEC/IEEE 32675 standard can improve efficiency, consistency, and reliability of multi-cloud disaster recovery processes. Automated failover, fallback, backup, and restoration can reduce downtime and data loss, and a standardized framework can improve security and observability of disaster recovery processes. Finally, this research concludes that the ISO/IEC/IEEE 32675 standard provides a structural framework for multi-cloud disaster recovery by offering a measurable, resilient, repeatable, and standardized approach to managing the multi-cloud disaster recovery processes.

---

## Finalized System Context Diagram for Multi-Cloud Disaster Recovery
<p align="center">
  <img src="https://github.com/user-attachments/assets/685e7332-2dc9-4cca-a16c-1fd2ff0cf203" alt="System Context Diagram" width="700" height="400">
</p>
---

## Additional Instructions

**Figure 0-1** shows a list of GitHub Actions secrets and environment variables that are required to run this project.  

### Step-by-step instructions refer to the official links:
- [Using GitHub Actions with Azure](https://learn.microsoft.com/en-us/azure/developer/github/)  
- [Using GitHub Actions with Google Cloud Deploy](https://cloud.google.com/blog/products/devops-sre/using-github-actions-with-google-cloud-deploy)  
- [Using GitHub Actions with Docker](https://docs.docker.com/guides/gha/)  
---

### Figure 0-1  
*GitHub Actions secrets and environment variables*  
<p align="center">
<img width="452" height="229" alt="image" src="https://github.com/user-attachments/assets/8d310e99-9319-41f2-87c3-e80ab4044ef5" />
</p>
---

To connect the **AKS and GKE clusters**, specific commands must be run in each cluster one at a time to establish an active connection.  

### Figure 0-2  
*Instructions to connect AKS cluster*  
<p align="center">
<img width="452" height="202" alt="image" src="https://github.com/user-attachments/assets/133a3308-1b78-4b4e-a112-5ac7dee52368" />
</p>
### Figure 0-3  
*Instructions to connect GKE cluster*  
<p align="center">
<img width="452" height="199" alt="image" src="https://github.com/user-attachments/assets/a2466021-4f81-4c1a-bee3-58ca6d38a165" />
</p>
---

## Laravel Application Deployment

When the **AKS and GKE clusters** are up and running:  

- For the first deployment, run the `init.sh` script in both clusters.  
- This script is **not required** for later deployments.  
- Clusters can be destroyed using `destroy.sh`.  

After initialization, deploy the Laravel framework using the commands below:  

```bash
# Generate application key
kubectl exec -it app-xx -- php artisan key:generate  

# Run database migrations
kubectl exec -it app-xx -- php artisan migrate  

# Serve the Laravel application
kubectl exec -it app-xx -- php artisan serve  

# Test deployment
curl -I http://domain

app-xx = the application pod name from the respective cluster.
domain = the domain name of the project.

## Static Public IP

A static public IP must be updated in both **AKS** and **GKE** clusters according to the allocated IP address.  

Update the following files:  
- `/Kubernetes/AKSCluster/web-service.yaml`  
- `/Kubernetes/GKECluster/
