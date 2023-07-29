const axios = require('axios');

const makeOpenAISolicitud = async (texto, api_key) => {
  const url = 'https://api.openai.com/v1/chat/completions';

  // Parámetros de la solicitud
  const data = {
    messages: [
      {
        role: 'system',
        content: 'You are a customer',
      },
      {
        role: 'user',
        content: texto,
      },
    ],
  };

  // Encabezados de autenticación
  const headers = {
    Authorization: `Bearer ${api_key}`,
    'Content-Type': 'application/json',
  };

  try {
    // Realizar la solicitud a la API de OpenAI usando axios
    const response = await axios.post(url, data, { headers });

    // Procesar la respuesta
    const output = response.data;
    if (output && output.choices && output.choices.length > 0) {
      const assistantResponse = output.choices[0].message.content;
      // Procesar la respuesta del asistente según tus necesidades
      return assistantResponse;
    } else {
      throw new Error('No se recibió ninguna respuesta de OpenAI');
    }
  } catch (error) {
    throw error;
  }
};

module.exports = makeOpenAISolicitud;
