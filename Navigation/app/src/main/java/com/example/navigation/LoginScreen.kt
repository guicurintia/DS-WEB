package com.example.navigation


import androidx.compose.foundation.layout.Arrangement
import androidx.compose.foundation.layout.Column
import androidx.compose.foundation.layout.Spacer
import androidx.compose.foundation.layout.fillMaxSize
import androidx.compose.foundation.layout.height
import androidx.compose.foundation.layout.padding
import androidx.compose.material3.Button
import androidx.compose.material3.HorizontalDivider
import androidx.compose.material3.OutlinedTextField
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.Composable
import androidx.compose.runtime.getValue
import androidx.compose.runtime.mutableStateOf
import androidx.compose.runtime.remember
import androidx.compose.runtime.setValue
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.text.font.FontWeight
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import androidx.navigation.NavController

@Composable
fun LoginScreen(navController: NavController) {
    var nome by remember { mutableStateOf("") }
    var email by remember { mutableStateOf("") }
    var senha by remember { mutableStateOf("") }
    var login by remember { mutableStateOf("") }
    Surface(modifier = Modifier.fillMaxSize().padding(10.dp)) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally
        ) {

            Text(text = "Tela de Login", fontSize = 30.sp, fontWeight = FontWeight.Bold)
            OutlinedTextField(
                value = nome,
                onValueChange = { novoNome ->
                    nome = novoNome.trim()
                },
                label = { Text(text = "Nome", fontSize = 20.sp) },
                maxLines = 1
            )
            OutlinedTextField(
                value = email,
                onValueChange = { novoEmail ->
                    email = novoEmail.trim()
                },
                label = { Text(text = "email", fontSize = 20.sp) },
                maxLines = 1
            )
            OutlinedTextField(
                value = senha,
                onValueChange = { novaSenha ->
                    senha = novaSenha.trim()
                },
                label = { Text(text = "Senha", fontSize = 20.sp) },
                maxLines = 1
            )
            Spacer(modifier = Modifier.height(10.dp))
            Button(onClick = { navController.navigate("home") }) {
                Text(text = "Login")

            }

            Spacer(modifier = Modifier.height(10.dp))
            Button(onClick = { navController.navigate("cadastro") }) {
                Text(text = "Cadastro")

            }

            Text(text = login)
        }
    }
}





