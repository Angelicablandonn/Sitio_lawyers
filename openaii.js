const axios = require('axios');

const makeOpenAISolicitud = async () => {
  const url = 'https://api.openai.com/v1/chat/completions';
  // const parametros = process.argv[2];  // Aqui almacenas en una variable en caso de que mandes alguna variable o parametro desde el php
  // console.log('Parametro Reibido:', parametros);

pregunta="Que es el amor;"
  // Parámetros de la solicitud
  const data= { messages: [
    { role: 'system', content: 'You  are a helpful assistant ' },
    { role: 'user', content: pregunta },
  ],
  model: 'gpt-3.5-turbo',
  max_tokens: 50, 
  temperature: 0.2};

  // Encabezados de autenticación
  const headers = {
    'Authorization': 'Bearer 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',
    'Content-Type': 'application/json'
  };

  try {
    // Realizar la solicitud a la API de ChatGPT usando axios
    const response = await axios.post(url, data, { headers });

    // Procesar la respuesta
    const output = response.data;
    if (output.choices && output.choices.length > 0 && output.choices[0].message && output.choices[0].message.content) {
      const assistantResponse = output.choices[0].message.content;
      // Procesar la respuesta del asistente según tus necesidades
      console.log(assistantResponse);
    }
  } catch (error) {
    if (error.response) {
      // El servidor respondió con un código de estado diferente a 2xx
      console.error('Error en la solicitud:', error.response.data);
    } else if (error.request) {
      // La solicitud fue realizada pero no se recibió ninguna respuesta
      console.error('No se obtuvo ninguna respuesta:', error.request);
    } else {
      // Ocurrió un error durante la configuración de la solicitud
      console.error('Error al enviar la solicitud:', error.message);
    }
  }
};

// Llamar a la función para ejecutar la solicitud
makeOpenAISolicitud();