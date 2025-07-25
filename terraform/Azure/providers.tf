terraform {
  required_providers {
    azurerm = {
      source  = "hashicorp/azurerm"
      version = "~> 3.0"
    }
    azapi = {
      source  = "azure/azapi"
      version = "~> 1.5"
    }
  }
}

provider "azurerm" {
  features {}
}

provider "azapi" {}
