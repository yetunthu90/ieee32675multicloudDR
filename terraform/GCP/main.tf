provider "google" {
  project = var.gcp_project_id
  region  = var.gcp_region
}

# Reserve a static external IP (Standard tier)
resource "google_compute_address" "gke_standard_ip" {
  name         = "gke-standard-ip"
  region       = var.gcp_region
  address_type = "EXTERNAL"
  network_tier = "STANDARD"
}

# Create GKE cluster
resource "google_container_cluster" "gke" {
  name               = "gke-laravel-dr"
  location           = var.gcp_region
  initial_node_count = 1

  node_config {
    machine_type = "e2-small"
    oauth_scopes = [
      "https://www.googleapis.com/auth/cloud-platform",
    ]
  }

  networking_mode          = "VPC_NATIVE"
  remove_default_node_pool = true
  #enable_autopilot          = false
}
# Create a node pool
resource "google_container_node_pool" "primary_nodes" {
  name     = "primary-node-pool"
  cluster  = google_container_cluster.gke.name
  location = var.gcp_region

  node_config {
    machine_type = "e2-small"
    oauth_scopes = [
      "https://www.googleapis.com/auth/cloud-platform",
    ]
  }

  initial_node_count = 1
}
