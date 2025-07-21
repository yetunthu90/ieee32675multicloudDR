terraform {
  backend "azurerm" {
    resource_group_name  = "my-tfstate-rg"
    storage_account_name = "mystatetfstoragedracc"
    container_name       = "tfstate"
    key                  = "aks-cluster.tfstate"
  }
}
