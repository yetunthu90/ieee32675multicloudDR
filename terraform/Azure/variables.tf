variable "resource_group_name" {
  type        = string
  default     = "my-tfstate-rg"
  description = "The name of the existing resource group."
}

variable "resource_group_location" {
  type        = string
  default     = "eastus"
  description = "Location of the resource group."
}

variable "cluster_name" {
  type        = string
  default     = "aks-multicloud-dr"
  description = "Name of the AKS cluster."
}

variable "node_count" {
  type        = number
  default     = 1
  description = "Initial number of nodes."
}

variable "username" {
  type        = string
  default     = "azureadmin"
  description = "Admin username for SSH access."
}

variable "public_ip_name" {
  type        = string
  default     = "akspublicip"
  description = "Name of the public IP to bind to the load balancer."
}
