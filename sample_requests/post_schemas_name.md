POST to qa-platform.nypl.org/v0.1/schemas/FakeStream  (you will have to modify the stream name param)

with body

{
   "type" : "record",
   "namespace" : "FakeSchema",
   "name" : "Fakename",
   "fields" : [
      { "name" : "FakeField1" , "type" : "string" },
      { "name" : "FakeField2" , "type" : "int" }
   ]
}


Receive

{
  "data": {
    "id": 9,
    "offsetBegin": 0,
    "offsetEnd": 0,
    "schemaObject": {
      "type": "record",
      "namespace": "FakeSchema",
      "name": "Fakename",
      "fields": [
        {
          "name": "FakeField1",
          "type": "string"
        },
        {
          "name": "FakeField2",
          "type": "int"
        }
      ]
    },
    "stream": "FakeStream",
    "schema": "{\n   \"type\" : \"record\",\n   \"namespace\" : \"FakeSchema\",\n   \"name\" : \"Fakename\",\n   \"fields\" : [\n      { \"name\" : \"FakeField1\" , \"type\" : \"string\" },\n      { \"name\" : \"FakeField2\" , \"type\" : \"int\" }\n   ]\n}"
  },
  "count": 1,
  "totalCount": 0,
  "statusCode": 200,
  "debugInfo": []
}

(id will be different and stream should match the one you used)

Make a get request to qa-platform.nypl.org/v0.1/schemas/{the id you just received}

You should receive a matching response e.g.


Response body
{
"data": {
  "id": 9,
  "offsetBegin": 0,
  "offsetEnd": 0,
  "schemaObject": {
    "type": "record",
    "namespace": "FakeSchema",
    "name": "Fakename",
    "fields": [
      {
        "name": "FakeField1",
        "type": "string"
      },
      {
        "name": "FakeField2",
        "type": "int"
      }
    ]
  },
  "stream": "FakeStream",
  "schema": "{\n   \"type\" : \"record\",\n   \"namespace\" : \"FakeSchema\",\n   \"name\" : \"Fakename\",\n   \"fields\" : [\n      { \"name\" : \"FakeField1\" , \"type\" : \"string\" },\n      { \"name\" : \"FakeField2\" , \"type\" : \"int\" }\n   ]\n}"
},
"count": 1,
"totalCount": 0,
"statusCode": 200,
"debugInfo": []
} 
