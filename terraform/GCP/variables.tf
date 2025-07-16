variable "gcp_project_id" {
  description = "GCP Project ID"
  type        = string
}

variable "gcp_region" {
  description = "GCP Region (e.g. us-central1)"
  type        = string
  default     = "us-central1"
}
