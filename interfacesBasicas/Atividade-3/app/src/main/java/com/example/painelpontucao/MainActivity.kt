package com.example.painelpontucao

import android.os.Bundle
import android.util.Log
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.compose.foundation.clickable
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.CircleShape
import androidx.compose.material3.Card
import androidx.compose.material3.Surface
import androidx.compose.material3.Text
import androidx.compose.runtime.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Color
import androidx.compose.ui.text.TextStyle
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import com.example.painelpontucao.ui.theme.PainelPontucaoTheme

class MainActivity : ComponentActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContent {
            PainelPontucaoTheme {
                MyApp()
            }
        }
    }
}

@Composable
fun MyApp() {
    var scoreCounterA by remember { mutableStateOf(0) }
    var scoreCounterB by remember { mutableStateOf(0) }

    Surface(
        modifier = Modifier
            .fillMaxSize(),
        color = Color(0xFF546E7A)
    ) {
        Column(
            verticalArrangement = Arrangement.Center,
            horizontalAlignment = Alignment.CenterHorizontally,
            modifier = Modifier.fillMaxSize()
        ) {
            // Time A
            Text(
                text = "Time A",
                style = TextStyle(color = Color.White, fontSize = 39.sp)
            )
            Text(
                text = "$scoreCounterA",
                style = TextStyle(color = Color.White, fontSize = 39.sp)
            )
            Spacer(modifier = Modifier.height(15.dp))
            ScoreButton(score = scoreCounterA, onTap = {
                scoreCounterA += 1
            })

            Spacer(modifier = Modifier.height(40.dp))

            // Time B
            Text(
                text = "Time B",
                style = TextStyle(color = Color.White, fontSize = 39.sp)
            )
            Text(
                text = "$scoreCounterB",
                style = TextStyle(color = Color.White, fontSize = 39.sp)
            )
            Spacer(modifier = Modifier.height(15.dp))
            ScoreButton(score = scoreCounterB, onTap = {
                scoreCounterB += 1
            })
        }
    }
}

@Composable
fun ScoreButton(score: Int, onTap: () -> Unit) {
    Card(
        modifier = Modifier
            .padding(3.dp)
            .size(135.dp)
            .clickable {
                onTap()
                Log.d("Contador", "Contador: $score")
            },
        shape = CircleShape
    ) {
        Box(
            modifier = Modifier.fillMaxSize(),
            contentAlignment = Alignment.Center
        ) {
            Text(text = "Add", fontSize = 18.sp)
        }
    }
}


