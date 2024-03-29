GET https://qa-platform.nypl.org/api/v0.1/current-schemas/Bib

return response:

{
  "data": {
    "id": 253,
    "offsetBegin": 0,
    "offsetEnd": 0,
    "schemaObject": {
      "name": "Bib",
      "type": "record",
      "fields": [
        {
          "name": "id",
          "type": "string"
        },
        {
          "name": "nyplSource",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "nyplType",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "updatedDate",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "createdDate",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "deletedDate",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "deleted",
          "type": "boolean"
        },
        {
          "name": "locations",
          "type": [
            "null",
            {
              "type": "array",
              "items": [
                {
                  "name": "locations",
                  "type": "record",
                  "fields": [
                    {
                      "name": "code",
                      "type": [
                        "string",
                        "null"
                      ]
                    },
                    {
                      "name": "name",
                      "type": [
                        "string",
                        "null"
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name": "suppressed",
          "type": [
            "boolean",
            "null"
          ]
        },
        {
          "name": "lang",
          "type": [
            "null",
            {
              "name": "lang",
              "type": "record",
              "fields": [
                {
                  "name": "code",
                  "type": "string"
                },
                {
                  "name": "name",
                  "type": [
                    "string",
                    "null"
                  ]
                }
              ]
            }
          ]
        },
        {
          "name": "title",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "author",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "materialType",
          "type": [
            "null",
            {
              "name": "materialType",
              "type": "record",
              "fields": [
                {
                  "name": "code",
                  "type": "string"
                },
                {
                  "name": "value",
                  "type": [
                    "string",
                    "null"
                  ]
                }
              ]
            }
          ]
        },
        {
          "name": "bibLevel",
          "type": [
            "null",
            {
              "name": "bibLevel",
              "type": "record",
              "fields": [
                {
                  "name": "code",
                  "type": "string"
                },
                {
                  "name": "value",
                  "type": [
                    "string",
                    "null"
                  ]
                }
              ]
            }
          ]
        },
        {
          "name": "publishYear",
          "type": [
            "int",
            "null"
          ]
        },
        {
          "name": "catalogDate",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "country",
          "type": [
            "null",
            {
              "name": "country",
              "type": "record",
              "fields": [
                {
                  "name": "code",
                  "type": "string"
                },
                {
                  "name": "name",
                  "type": [
                    "string",
                    "null"
                  ]
                }
              ]
            }
          ]
        },
        {
          "name": "normTitle",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "normAuthor",
          "type": [
            "string",
            "null"
          ]
        },
        {
          "name": "fixedFields",
          "type": [
            "null",
            {
              "type": "map",
              "values": [
                {
                  "name": "fixedField",
                  "type": "record",
                  "fields": [
                    {
                      "name": "label",
                      "type": [
                        "string",
                        "null"
                      ]
                    },
                    {
                      "name": "value",
                      "type": [
                        "string",
                        "null",
                        "boolean",
                        "int"
                      ]
                    },
                    {
                      "name": "display",
                      "type": [
                        "string",
                        "null"
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        },
        {
          "name": "varFields",
          "type": [
            "null",
            {
              "type": "array",
              "items": [
                {
                  "name": "varField",
                  "type": "record",
                  "fields": [
                    {
                      "name": "fieldTag",
                      "type": [
                        "string",
                        "null"
                      ]
                    },
                    {
                      "name": "marcTag",
                      "type": [
                        "string",
                        "null"
                      ]
                    },
                    {
                      "name": "ind1",
                      "type": [
                        "string",
                        "null"
                      ]
                    },
                    {
                      "name": "ind2",
                      "type": [
                        "string",
                        "null"
                      ]
                    },
                    {
                      "name": "content",
                      "type": [
                        "string",
                        "null",
                        "boolean"
                      ]
                    },
                    {
                      "name": "subfields",
                      "type": [
                        "null",
                        {
                          "type": "array",
                          "items": [
                            {
                              "name": "subfield",
                              "type": "record",
                              "fields": [
                                {
                                  "name": "tag",
                                  "type": [
                                    "string",
                                    "null"
                                  ]
                                },
                                {
                                  "name": "content",
                                  "type": [
                                    "string",
                                    "null"
                                  ]
                                }
                              ]
                            }
                          ]
                        }
                      ]
                    }
                  ]
                }
              ]
            }
          ]
        }
      ]
    },
    "stream": "Bib",
    "schema": "{\n  \"name\": \"Bib\",\n  \"type\": \"record\",\n  \"fields\": [\n    {\n      \"name\": \"id\",\n      \"type\": \"string\"\n    },\n    {\n      \"name\": \"nyplSource\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"nyplType\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"updatedDate\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"createdDate\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"deletedDate\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"deleted\",\n      \"type\": \"boolean\"\n    },\n    {\n      \"name\": \"locations\",\n      \"type\": [\n        \"null\",\n        {\n          \"type\": \"array\",\n          \"items\": [\n            {\n              \"name\": \"locations\",\n              \"type\": \"record\",\n              \"fields\": [\n                {\n                  \"name\": \"code\",\n                  \"type\": [\n                    \"string\",\n                    \"null\"\n                  ]\n                },\n                {\n                  \"name\": \"name\",\n                  \"type\": [\n                    \"string\",\n                    \"null\"\n                  ]\n                }\n              ]\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"suppressed\",\n      \"type\": [\n        \"boolean\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"lang\",\n      \"type\": [\n        \"null\",\n        {\n          \"name\": \"lang\",\n          \"type\": \"record\",\n          \"fields\": [\n            {\n              \"name\": \"code\",\n              \"type\": \"string\"\n            },\n            {\n              \"name\": \"name\",\n              \"type\": [\n                \"string\",\n                \"null\"\n              ]\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"title\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"author\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"materialType\",\n      \"type\": [\n        \"null\",\n        {\n          \"name\": \"materialType\",\n          \"type\": \"record\",\n          \"fields\": [\n            {\n              \"name\": \"code\",\n              \"type\": \"string\"\n            },\n            {\n              \"name\": \"value\",\n              \"type\": [\n                \"string\",\n                \"null\"\n              ]\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"bibLevel\",\n      \"type\": [\n        \"null\",\n        {\n          \"name\": \"bibLevel\",\n          \"type\": \"record\",\n          \"fields\": [\n            {\n              \"name\": \"code\",\n              \"type\": \"string\"\n            },\n            {\n              \"name\": \"value\",\n              \"type\": [\n                \"string\",\n                \"null\"\n              ]\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"publishYear\",\n      \"type\": [\n        \"int\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"catalogDate\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"country\",\n      \"type\": [\n        \"null\",\n        {\n          \"name\": \"country\",\n          \"type\": \"record\",\n          \"fields\": [\n            {\n              \"name\": \"code\",\n              \"type\": \"string\"\n            },\n            {\n              \"name\": \"name\",\n              \"type\": [\n                \"string\",\n                \"null\"\n              ]\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"normTitle\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"normAuthor\",\n      \"type\": [\n        \"string\",\n        \"null\"\n      ]\n    },\n    {\n      \"name\": \"fixedFields\",\n      \"type\": [\n        \"null\",\n        {\n          \"type\": \"map\",\n          \"values\": [\n            {\n              \"name\": \"fixedField\",\n              \"type\": \"record\",\n              \"fields\": [\n                {\n                  \"name\": \"label\",\n                  \"type\": [\n                    \"string\",\n                    \"null\"\n                  ]\n                },\n                {\n                  \"name\": \"value\",\n                  \"type\": [\n                    \"string\",\n                    \"null\",\n                    \"boolean\",\n                    \"int\"\n                  ]\n                },\n                {\n                  \"name\": \"display\",\n                  \"type\": [\n                    \"string\",\n                    \"null\"\n                  ]\n                }\n              ]\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"varFields\",\n      \"type\": [\n        \"null\",\n        {\n          \"type\": \"array\",\n          \"items\": [\n            {\n              \"name\": \"varField\",\n              \"type\": \"record\",\n              \"fields\": [\n                {\n                  \"name\": \"fieldTag\",\n                  \"type\": [\n                    \"string\",\n                    \"null\"\n                  ]\n                },\n                {\n                  \"name\": \"marcTag\",\n                  \"type\": [\n                    \"string\",\n                    \"null\"\n                  ]\n                },\n                {\n                  \"name\": \"ind1\",\n                  \"type\": [\n                    \"string\",\n                    \"null\"\n                  ]\n                },\n                {\n                  \"name\": \"ind2\",\n                  \"type\": [\n                    \"string\",\n                    \"null\"\n                  ]\n                },\n                {\n                  \"name\": \"content\",\n                  \"type\": [\n                    \"string\",\n                    \"null\",\n                    \"boolean\"\n                  ]\n                },\n                {\n                  \"name\": \"subfields\",\n                  \"type\": [\n                    \"null\",\n                    {\n                      \"type\": \"array\",\n                      \"items\": [\n                        {\n                          \"name\": \"subfield\",\n                          \"type\": \"record\",\n                          \"fields\": [\n                            {\n                              \"name\": \"tag\",\n                              \"type\": [\n                                \"string\",\n                                \"null\"\n                              ]\n                            },\n                            {\n                              \"name\": \"content\",\n                              \"type\": [\n                                \"string\",\n                                \"null\"\n                              ]\n                            }\n                          ]\n                        }\n                      ]\n                    }\n                  ]\n                }\n              ]\n            }\n          ]\n        }\n      ]\n    }\n  ]\n}"
  },
  "count": 1,
  "totalCount": 0,
  "statusCode": 200,
  "debugInfo": []
}
