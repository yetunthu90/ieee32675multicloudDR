terraform {
  backend "gcs" {
    bucket = "my-terraform-state-bucket-ye"
    prefix = "gke/terraform/state"
  }
}
