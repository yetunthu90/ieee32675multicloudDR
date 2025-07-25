resource "azapi_resource" "ssh_public_key" {
  type      = "Microsoft.Compute/sshPublicKeys@2022-11-01"
  name      = "sshkey-aks"
  location  = var.resource_group_location
  parent_id = data.azurerm_resource_group.rg.id
  body      = jsonencode({})
}

resource "azapi_resource_action" "ssh_public_key_gen" {
  type        = "Microsoft.Compute/sshPublicKeys@2022-11-01"
  resource_id = azapi_resource.ssh_public_key.id
  action      = "generateKeyPair"
  method      = "POST"
  response_export_values = ["publicKey", "privateKey"]
}
