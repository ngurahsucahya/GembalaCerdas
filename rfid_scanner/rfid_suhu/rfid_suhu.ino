#include <Wire.h>
#include <SPI.h>
#include <MFRC522.h>
#include <DHT.h>
#include <Adafruit_GFX.h>
#include <Adafruit_SSD1306.h>

#define DHT_SENSOR_PIN  4
#define DHT_SENSOR_TYPE DHT22

#define SS_PIN 5
#define RST_PIN 0

#define OLED_RESET 4
 
MFRC522 rfid(SS_PIN, RST_PIN); 
MFRC522::MIFARE_Key key; 
byte nuidPICC[4];

DHT dht_sensor(DHT_SENSOR_PIN, DHT_SENSOR_TYPE);

Adafruit_SSD1306 display;

void setup() { 
  Serial.begin(9600);
  dht_sensor.begin();
  SPI.begin(); // Init SPI bus
  rfid.PCD_Init(); // Init MFRC522 

  for (byte i = 0; i < 6; i++) {
    key.keyByte[i] = 0xFF;
  }

  Serial.println(F("This code scan the MIFARE Classsic NUID."));
  Serial.print(F("Using the following key:"));
  printHex(key.keyByte, MFRC522::MF_KEY_SIZE);

  display.begin(SSD1306_SWITCHCAPVCC, 0x3C);
  display.clearDisplay();  
  display.setTextSize(1);
  display.setTextColor(WHITE);
  display.setCursor(0, 0);
  display.println("Hai, kenalin");
  display.println("Aku Gembala Cerdas");
  display.display();
  delay(2000);
}
 
void loop() {
  static unsigned long previousMillis = 0;
  const long interval = 5000;  // Set interval to 5000 milliseconds (5 detik)

  unsigned long currentMillis = millis();

  //DHT22
  if (currentMillis - previousMillis >= interval) {
    previousMillis = currentMillis;

    float humi = dht_sensor.readHumidity();
    float tempC = dht_sensor.readTemperature();

    Serial.print("Kelembapan: ");
    Serial.print(humi);
    Serial.println("%");

    Serial.print("  |  ");

    Serial.print("Suhu: ");
    Serial.print(tempC);
    Serial.println("°C");
    display.clearDisplay();
    display.setTextSize(1);
    display.setTextColor(WHITE);
    display.setCursor(0, 0);
    display.println("Gembala Cerdas");
    display.print("Kelembapan ");
    display.print(humi); 
    display.println("%");
    display.print("Suhu       ");
    display.print(tempC); 
    display.print((char)247);
    display.println("C");
    display.display();
  }

  if (!rfid.PICC_IsNewCardPresent())
    return;

  if (!rfid.PICC_ReadCardSerial())
    return;

  MFRC522::PICC_Type piccType = rfid.PICC_GetType(rfid.uid.sak);

  if (piccType != MFRC522::PICC_TYPE_MIFARE_MINI &&
      piccType != MFRC522::PICC_TYPE_MIFARE_1K &&
      piccType != MFRC522::PICC_TYPE_MIFARE_4K) {
    Serial.println(F("Your tag is not of type MIFARE Classic."));
    return;
  } else {
    for (byte i = 0; i < 4; i++) {
      nuidPICC[i] = rfid.uid.uidByte[i];
    }

    Serial.println(F("RFID Domba: "));
    printDecA(rfid.uid.uidByte, rfid.uid.size);
    Serial.println();
    display.clearDisplay();
    display.setTextSize(1);
    display.setTextColor(WHITE);
    display.setCursor(0, 0);
    display.println("Gembala Cerdas");
    display.println("RFID Domba: ");
    printDec(display, rfid.uid.uidByte, rfid.uid.size);
    display.display();

    
  }

  rfid.PICC_HaltA();
  rfid.PCD_StopCrypto1();
  delay(2000);
}


void printHex(byte *buffer, byte bufferSize) {
  for (byte i = 0; i < bufferSize; i++) {
    // Serial.print(buffer[i] < 0x10 ? " 0" : " ");
    Serial.print(buffer[i] < 0x10 ? "0" : "");
    Serial.print(buffer[i], HEX);
  }
}

void printDec(Adafruit_SSD1306& display, byte *buffer, byte bufferSize) {
  for (byte i = 0; i < bufferSize; i++) {
    display.print(buffer[i] < 0x10 ? " " : "");
    display.print(buffer[i], DEC);
  }
}

void printDecA(byte *buffer, byte bufferSize) {
  for (byte i = 0; i < bufferSize; i++) {
    Serial.print(buffer[i] < 0x10 ? " " : "");
    Serial.print(buffer[i], DEC);
  }
}
