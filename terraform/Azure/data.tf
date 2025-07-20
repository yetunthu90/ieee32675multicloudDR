data "azurerm_resource_group" "rg" {
  name = var.resource_group_name
}

data "azurerm_public_ip" "webservice_ip" {
  name                = var.public_ip_name
  resource_group_name = var.resource_group_name
}
