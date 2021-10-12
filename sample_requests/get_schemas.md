GET https://qa-platform.nypl.org/api/v0.1/schemas

Return resp:


{
  "data": [
    {
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
    {
      "id": 285,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "BibPostRequest",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "nyplSource",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "nyplType",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "updatedDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "createdDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "deletedDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "deleted",
            "type": [
              "null",
              "boolean"
            ],
            "default": null
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
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "name",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      }
                    ]
                  }
                ]
              }
            ],
            "default": null
          },
          {
            "name": "suppressed",
            "type": [
              "null",
              "boolean"
            ],
            "default": null
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
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "name",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  }
                ]
              }
            ],
            "default": null
          },
          {
            "name": "title",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "author",
            "type": [
              "null",
              "string"
            ],
            "default": null
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
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "value",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  }
                ]
              }
            ],
            "default": null
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
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "value",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  }
                ]
              }
            ],
            "default": null
          },
          {
            "name": "publishYear",
            "type": [
              "null",
              "int"
            ],
            "default": null
          },
          {
            "name": "catalogDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
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
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "name",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  }
                ]
              }
            ],
            "default": null
          },
          {
            "name": "normTitle",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "normAuthor",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "fixedFields",
            "type": [
              "null",
              {
                "type": "map",
                "values": [
                  "null",
                  {
                    "name": "fixedField",
                    "type": "record",
                    "fields": [
                      {
                        "name": "label",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "value",
                        "type": [
                          "null",
                          "string",
                          "boolean",
                          "int"
                        ],
                        "default": null
                      },
                      {
                        "name": "display",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
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
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "marcTag",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "ind1",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "ind2",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "content",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
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
                                      "null",
                                      "string"
                                    ],
                                    "default": null
                                  },
                                  {
                                    "name": "content",
                                    "type": [
                                      "null",
                                      "string"
                                    ],
                                    "default": null
                                  }
                                ]
                              }
                            ]
                          }
                        ],
                        "default": null
                      }
                    ]
                  }
                ]
              }
            ]
          }
        ]
      },
      "stream": "BibPostRequest",
      "schema": "{  \n   \"name\":\"BibPostRequest\",\n   \"type\":\"record\",\n   \"fields\":[  \n      {  \n         \"name\":\"id\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"nyplSource\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"nyplType\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"updatedDate\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"createdDate\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"deletedDate\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"deleted\",\n         \"type\":[  \n            \"null\",\n            \"boolean\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"locations\",\n         \"type\":[  \n            \"null\",\n            {  \n               \"type\":\"array\",\n               \"items\":[  \n                  {  \n                     \"name\":\"locations\",\n                     \"type\":\"record\",\n                     \"fields\":[  \n                        {  \n                           \"name\":\"code\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\"\n                           ],\n                           \"default\":null\n                        },\n                        {  \n                           \"name\":\"name\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\"\n                           ],\n                           \"default\":null\n                        }\n                     ]\n                  }\n               ]\n            }\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"suppressed\",\n         \"type\":[  \n            \"null\",\n            \"boolean\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"lang\",\n         \"type\":[  \n            \"null\",\n            {  \n               \"name\":\"lang\",\n               \"type\":\"record\",\n               \"fields\":[  \n                  {  \n                     \"name\":\"code\",\n                     \"type\":[  \n                        \"null\",\n                        \"string\"\n                     ],\n                     \"default\":null\n                  },\n                  {  \n                     \"name\":\"name\",\n                     \"type\":[  \n                        \"null\",\n                        \"string\"\n                     ],\n                     \"default\":null\n                  }\n               ]\n            }\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"title\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"author\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"materialType\",\n         \"type\":[  \n            \"null\",\n            {  \n               \"name\":\"materialType\",\n               \"type\":\"record\",\n               \"fields\":[  \n                  {  \n                     \"name\":\"code\",\n                     \"type\":[  \n                        \"null\",\n                        \"string\"\n                     ],\n                     \"default\":null\n                  },\n                  {  \n                     \"name\":\"value\",\n                     \"type\":[  \n                        \"null\",\n                        \"string\"\n                     ],\n                     \"default\":null\n                  }\n               ]\n            }\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"bibLevel\",\n         \"type\":[  \n            \"null\",\n            {  \n               \"name\":\"bibLevel\",\n               \"type\":\"record\",\n               \"fields\":[  \n                  {  \n                     \"name\":\"code\",\n                     \"type\":[  \n                        \"null\",\n                        \"string\"\n                     ],\n                     \"default\":null\n                  },\n                  {  \n                     \"name\":\"value\",\n                     \"type\":[  \n                        \"null\",\n                        \"string\"\n                     ],\n                     \"default\":null\n                  }\n               ]\n            }\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"publishYear\",\n         \"type\":[  \n            \"null\",\n            \"int\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"catalogDate\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"country\",\n         \"type\":[  \n            \"null\",\n            {  \n               \"name\":\"country\",\n               \"type\":\"record\",\n               \"fields\":[  \n                  {  \n                     \"name\":\"code\",\n                     \"type\":[  \n                        \"null\",\n                        \"string\"\n                     ],\n                     \"default\":null\n                  },\n                  {  \n                     \"name\":\"name\",\n                     \"type\":[  \n                        \"null\",\n                        \"string\"\n                     ],\n                     \"default\":null\n                  }\n               ]\n            }\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"normTitle\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"normAuthor\",\n         \"type\":[  \n            \"null\",\n            \"string\"\n         ],\n         \"default\":null\n      },\n      {  \n         \"name\":\"fixedFields\",\n         \"type\":[  \n            \"null\",\n            {  \n               \"type\":\"map\",\n               \"values\":[  \n                  \"null\",\n                  {  \n                     \"name\":\"fixedField\",\n                     \"type\":\"record\",\n                     \"fields\":[  \n                        {  \n                           \"name\":\"label\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\"\n                           ],\n                           \"default\":null\n                        },\n                        {  \n                           \"name\":\"value\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\",\n                              \"boolean\",\n                              \"int\"\n                           ],\n                           \"default\":null\n                        },\n                        {  \n                           \"name\":\"display\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\"\n                           ],\n                           \"default\":null\n                        }\n                     ]\n                  }\n               ]\n            }\n         ]\n      },\n      {  \n         \"name\":\"varFields\",\n         \"type\":[  \n            \"null\",\n            {  \n               \"type\":\"array\",\n               \"items\":[  \n                  {  \n                     \"name\":\"varField\",\n                     \"type\":\"record\",\n                     \"fields\":[  \n                        {  \n                           \"name\":\"fieldTag\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\"\n                           ],\n                           \"default\":null\n                        },\n                        {  \n                           \"name\":\"marcTag\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\"\n                           ],\n                           \"default\":null\n                        },\n                        {  \n                           \"name\":\"ind1\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\"\n                           ],\n                           \"default\":null\n                        },\n                        {  \n                           \"name\":\"ind2\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\"\n                           ],\n                           \"default\":null\n                        },\n                        {  \n                           \"name\":\"content\",\n                           \"type\":[  \n                              \"null\",\n                              \"string\"\n                           ],\n                           \"default\":null\n                        },\n                        {  \n                           \"name\":\"subfields\",\n                           \"type\":[  \n                              \"null\",\n                              {  \n                                 \"type\":\"array\",\n                                 \"items\":[  \n                                    {  \n                                       \"name\":\"subfield\",\n                                       \"type\":\"record\",\n                                       \"fields\":[  \n                                          {  \n                                             \"name\":\"tag\",\n                                             \"type\":[  \n                                                \"null\",\n                                                \"string\"\n                                             ],\n                                             \"default\":null\n                                          },\n                                          {  \n                                             \"name\":\"content\",\n                                             \"type\":[  \n                                                \"null\",\n                                                \"string\"\n                                             ],\n                                             \"default\":null\n                                          }\n                                       ]\n                                    }\n                                 ]\n                              }\n                           ],\n                           \"default\":null\n                        }\n                     ]\n                  }\n               ]\n            }\n         ]\n      }\n   ]\n}"
    },
    {
      "id": 2,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "CancelRequestResult",
        "type": "record",
        "fields": [
          {
            "name": "jobId",
            "type": "string"
          },
          {
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "error",
            "type": [
              "null",
              {
                "name": "Error",
                "type": "record",
                "fields": [
                  {
                    "name": "message",
                    "type": "string"
                  },
                  {
                    "name": "type",
                    "type": "string"
                  }
                ]
              }
            ]
          },
          {
            "name": "cancelRequestId",
            "type": "int"
          }
        ]
      },
      "stream": "CancelRequestResult",
      "schema": "{\n  \"name\": \"CancelRequestResult\",\n  \"type\": \"record\",\n  \"fields\": [\n    {\n      \"name\": \"jobId\",\n      \"type\": \"string\"\n    },\n    {\n      \"name\": \"success\",\n      \"type\": \"boolean\"\n    },\n    {\n      \"name\": \"error\",\n      \"type\": [\n        \"null\",\n        {\n          \"name\": \"Error\",\n          \"type\": \"record\",\n          \"fields\": [\n            {\n              \"name\": \"message\",\n              \"type\": \"string\"\n            },\n            {\n              \"name\": \"type\",\n              \"type\": \"string\"\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"cancelRequestId\",\n      \"type\": \"int\"\n    }\n  ]\n}\n"
    },
    {
      "id": 261,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "Checkin",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "string"
          },
          {
            "name": "patronBarcode",
            "type": "string"
          },
          {
            "name": "itemBarcode",
            "type": "string"
          },
          {
            "name": "createdDate",
            "type": [
              "string",
              "null"
            ]
          }
        ]
      },
      "stream": "Checkin",
      "schema": "{\"name\":\"Checkin\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"string\"},{\"name\":\"patronBarcode\",\"type\":\"string\"},{\"name\":\"itemBarcode\",\"type\":\"string\"},{\"name\":\"createdDate\",\"type\":[\"string\",\"null\"]}]}"
    },
    {
      "id": 262,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "CheckinRequest",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "int"
          },
          {
            "name": "cancelRequestId",
            "type": [
              "int",
              "null"
            ]
          },
          {
            "name": "jobId",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "itemBarcode",
            "type": "string"
          },
          {
            "name": "owningInstitutionId",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "createdDate",
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
          }
        ]
      },
      "stream": "CheckinRequest",
      "schema": "{\"name\":\"CheckinRequest\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"int\"},{\"name\":\"cancelRequestId\",\"type\":[\"int\",\"null\"]},{\"name\":\"jobId\",\"type\":[\"string\",\"null\"]},{\"name\":\"itemBarcode\",\"type\":\"string\"},{\"name\":\"owningInstitutionId\",\"type\":[\"string\",\"null\"]},{\"name\":\"success\",\"type\":\"boolean\"},{\"name\":\"createdDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"updatedDate\",\"type\":[\"string\",\"null\"]}]}"
    },
    {
      "id": 254,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "Checkout",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "string"
          },
          {
            "name": "patron",
            "type": "string"
          },
          {
            "name": "item",
            "type": "string"
          },
          {
            "name": "barcode",
            "type": "string"
          },
          {
            "name": "dueDate",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "callNumber",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "numberOfRenewals",
            "type": [
              "int",
              "null"
            ]
          },
          {
            "name": "outDate",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "recallDate",
            "type": [
              "string",
              "null"
            ]
          }
        ]
      },
      "stream": "Checkout",
      "schema": "{\"name\":\"Checkout\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"string\"},{\"name\":\"patron\",\"type\":\"string\"},{\"name\":\"item\",\"type\":\"string\"},{\"name\":\"barcode\",\"type\":\"string\"},{\"name\":\"dueDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"callNumber\",\"type\":[\"string\",\"null\"]},{\"name\":\"numberOfRenewals\",\"type\":[\"int\",\"null\"]},{\"name\":\"outDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"recallDate\",\"type\":[\"string\",\"null\"]}]}"
    },
    {
      "id": 263,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "CheckoutRequest",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "int"
          },
          {
            "name": "cancelRequestId",
            "type": [
              "int",
              "null"
            ]
          },
          {
            "name": "patronBarcode",
            "type": "string"
          },
          {
            "name": "itemBarcode",
            "type": "string"
          },
          {
            "name": "owningInstitutionId",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "desiredDateDue",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "jobId",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "createdDate",
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
          }
        ]
      },
      "stream": "CheckoutRequest",
      "schema": "{\"name\":\"CheckoutRequest\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"int\"},{\"name\":\"cancelRequestId\",\"type\":[\"int\",\"null\"]},{\"name\":\"patronBarcode\",\"type\":\"string\"},{\"name\":\"itemBarcode\",\"type\":\"string\"},{\"name\":\"owningInstitutionId\",\"type\":[\"string\",\"null\"]},{\"name\":\"desiredDateDue\",\"type\":[\"string\",\"null\"]},{\"name\":\"jobId\",\"type\":[\"string\",\"null\"]},{\"name\":\"success\",\"type\":\"boolean\"},{\"name\":\"createdDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"updatedDate\",\"type\":[\"string\",\"null\"]}]}"
    },
    {
      "id": 3,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "fields": [
          {
            "doc": "uniqure processing row uuid, auto-generated and random",
            "name": "uuid",
            "type": [
              "string"
            ]
          },
          {
            "doc": "Obfuscated unique transaction checksum of concatenated transaction information",
            "name": "transaction_checksum",
            "type": [
              "string"
            ]
          },
          {
            "doc": "Obfuscated patron id",
            "name": "patron_id",
            "type": [
              "string"
            ]
          },
          {
            "doc": "Patron ptype code",
            "name": "ptype_code",
            "type": [
              "null",
              "int"
            ]
          },
          {
            "doc": "A five-character location code, right-padded with spaces, from the associated patron record.",
            "name": "patron_home_library_code",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "doc": "Patron 'home region' code",
            "name": "pcode3",
            "type": [
              "null",
              "int"
            ]
          },
          {
            "doc": "Patron postal code",
            "name": "postal_code",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "doc": "Patron census tract",
            "name": "geoid",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "doc": "Item type code",
            "name": "itype_code_num",
            "type": [
              "null",
              "int"
            ]
          },
          {
            "doc": "A five-character location code, right-padded with spaces, from the associated item record.",
            "name": "item_location_code",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "doc": "Item code 1",
            "name": "icode1",
            "type": [
              "null",
              "int"
            ]
          },
          {
            "doc": "Type of transaction: `o` (checkout), `i` (checkin), `n` (hold), `nb` (bib hold), `ni` (item hold), `nv` (volume hold), `h` (hold with recall), `hb` (hold recall bib), `hi` (hold recall item), `hv` (hold recall volume), `f` (filled hold), `r` (renewal), `b` (booking), `u` (use count)",
            "name": "op_code",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "doc": "Transaction date (ISO 8601 date without time in ET)",
            "name": "transaction_et",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "doc": "Due date (ISO 8601 date without time in ET) The application of this date depends on the `op_code` for the transaction. The due date is not included for bookings (`op_code` `b`) or filled holds (`op_code` `f`). For `op_code` `i` (checkin), this is the original due date. For `op_code` `r` (renewal), this is the renewal due date. For `op_code` `o` (checkouts), this is the item due date. For `op_code` `n` (holds) and `h` (holds with recall), a non-zero entry indicates that the hold is for a checked-out item that is due on the specified date.",
            "name": "due_date_et",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "doc": "The name of the program that generated the transaction. Valid program names are: `circ` (includes transactions made using PC Circ), `circa` (for transactions written by selfcheckwebserver and in-house use [transaction codes 'u' and 's'], which use webpac to execute transactions.) `milcirc`, ` milmyselfcheck`, `readreq`, `selfcheck`",
            "name": "application_name",
            "type": "string"
          },
          {
            "doc": "The number of the terminal at which the transaction occurred or the user-specified statistics group number for PC-Circ transactions. Also stores the login's statistics group number for circulation transactions performed with the following Circa applications: checkout checkin count internal use",
            "name": "stat_group_code_num",
            "type": [
              "null",
              "int"
            ]
          },
          {
            "doc": "Indicates loan rule governing transaction",
            "name": "loanrule_code_num",
            "type": [
              "null",
              "int"
            ]
          },
          {
            "doc": "The transaction source. Possible values are: local INN-Reach ILL",
            "name": "source_code",
            "type": "string"
          }
        ],
        "name": "CircTrans",
        "type": "record"
      },
      "stream": "CircTrans",
      "schema": "{\"fields\":[{\"doc\":\"uniqure processing row uuid, auto-generated and random\",\"name\":\"uuid\",\"type\":[\"string\"]},{\"doc\":\"Obfuscated unique transaction checksum of concatenated transaction information\",\"name\":\"transaction_checksum\",\"type\":[\"string\"]},{\"doc\":\"Obfuscated patron id\",\"name\":\"patron_id\",\"type\":[\"string\"]},{\"doc\":\"Patron ptype code\",\"name\":\"ptype_code\",\"type\":[\"null\",\"int\"]},{\"doc\":\"A five-character location code, right-padded with spaces, from the associated patron record.\",\"name\":\"patron_home_library_code\",\"type\":[\"null\",\"string\"]},{\"doc\":\"Patron 'home region' code\",\"name\":\"pcode3\",\"type\":[\"null\",\"int\"]},{\"doc\":\"Patron postal code\",\"name\":\"postal_code\",\"type\":[\"null\",\"string\"]},{\"doc\":\"Patron census tract\",\"name\":\"geoid\",\"type\":[\"null\",\"string\"]},{\"doc\":\"Item type code\",\"name\":\"itype_code_num\",\"type\":[\"null\",\"int\"]},{\"doc\":\"A five-character location code, right-padded with spaces, from the associated item record.\",\"name\":\"item_location_code\",\"type\":[\"null\",\"string\"]},{\"doc\":\"Item code 1\",\"name\":\"icode1\",\"type\":[\"null\",\"int\"]},{\"doc\":\"Type of transaction: `o` (checkout), `i` (checkin), `n` (hold), `nb` (bib hold), `ni` (item hold), `nv` (volume hold), `h` (hold with recall), `hb` (hold recall bib), `hi` (hold recall item), `hv` (hold recall volume), `f` (filled hold), `r` (renewal), `b` (booking), `u` (use count)\",\"name\":\"op_code\",\"type\":[\"null\",\"string\"]},{\"doc\":\"Transaction date (ISO 8601 date without time in ET)\",\"name\":\"transaction_et\",\"type\":[\"null\",\"string\"]},{\"doc\":\"Due date (ISO 8601 date without time in ET) The application of this date depends on the `op_code` for the transaction. The due date is not included for bookings (`op_code` `b`) or filled holds (`op_code` `f`). For `op_code` `i` (checkin), this is the original due date. For `op_code` `r` (renewal), this is the renewal due date. For `op_code` `o` (checkouts), this is the item due date. For `op_code` `n` (holds) and `h` (holds with recall), a non-zero entry indicates that the hold is for a checked-out item that is due on the specified date.\",\"name\":\"due_date_et\",\"type\":[\"null\",\"string\"]},{\"doc\":\"The name of the program that generated the transaction. Valid program names are: `circ` (includes transactions made using PC Circ), `circa` (for transactions written by selfcheckwebserver and in-house use [transaction codes 'u' and 's'], which use webpac to execute transactions.) `milcirc`, ` milmyselfcheck`, `readreq`, `selfcheck`\",\"name\":\"application_name\",\"type\":\"string\"},{\"doc\":\"The number of the terminal at which the transaction occurred or the user-specified statistics group number for PC-Circ transactions. Also stores the login's statistics group number for circulation transactions performed with the following Circa applications: checkout checkin count internal use\",\"name\":\"stat_group_code_num\",\"type\":[\"null\",\"int\"]},{\"doc\":\"Indicates loan rule governing transaction\",\"name\":\"loanrule_code_num\",\"type\":[\"null\",\"int\"]},{\"doc\":\"The transaction source. Possible values are: local INN-Reach ILL\",\"name\":\"source_code\",\"type\":\"string\"}],\"name\":\"CircTrans\",\"type\":\"record\"}"
    },
    {
      "id": 255,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "Hold",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "string"
          },
          {
            "name": "nyplSource",
            "type": "string"
          },
          {
            "name": "record",
            "type": "string"
          },
          {
            "name": "patron",
            "type": "string"
          },
          {
            "name": "frozen",
            "type": [
              "boolean",
              "null"
            ]
          },
          {
            "name": "placed",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "notNeededAfterDate",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "notWantedBeforeDate",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "estimatedReadyDate",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "pickupLocation",
            "type": [
              "null",
              {
                "name": "pickupLocation",
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
          },
          {
            "name": "status",
            "type": [
              "null",
              {
                "name": "status",
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
          },
          {
            "name": "recordType",
            "type": "string"
          },
          {
            "name": "priority",
            "type": "int"
          }
        ]
      },
      "stream": "Hold",
      "schema": "{\"name\":\"Hold\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"string\"},{\"name\":\"nyplSource\",\"type\":\"string\"},{\"name\":\"record\",\"type\":\"string\"},{\"name\":\"patron\",\"type\":\"string\"},{\"name\":\"frozen\",\"type\":[\"boolean\",\"null\"]},{\"name\":\"placed\",\"type\":[\"string\",\"null\"]},{\"name\":\"notNeededAfterDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"notWantedBeforeDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"estimatedReadyDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"pickupLocation\",\"type\":[\"null\",{\"name\":\"pickupLocation\",\"type\":\"record\",\"fields\":[{\"name\":\"code\",\"type\":[\"string\",\"null\"]},{\"name\":\"name\",\"type\":[\"string\",\"null\"]}]}]},{\"name\":\"status\",\"type\":[\"null\",{\"name\":\"status\",\"type\":\"record\",\"fields\":[{\"name\":\"code\",\"type\":[\"string\",\"null\"]},{\"name\":\"name\",\"type\":[\"string\",\"null\"]}]}]},{\"name\":\"recordType\",\"type\":\"string\"},{\"name\":\"priority\",\"type\":\"int\"}]}"
    },
    {
      "id": 7,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "Holding",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "int"
          },
          {
            "name": "bibIds",
            "type": {
              "type": "array",
              "items": "int",
              "default": []
            }
          },
          {
            "name": "bibIdLinks",
            "type": {
              "type": "array",
              "items": "string",
              "default": []
            }
          },
          {
            "name": "itemIds",
            "type": {
              "type": "array",
              "items": "int",
              "default": []
            }
          },
          {
            "name": "itemIdLinks",
            "type": {
              "type": "array",
              "items": "string",
              "default": []
            }
          },
          {
            "name": "inheritLocation",
            "type": "boolean"
          },
          {
            "name": "allocationRule",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "accountingUnit",
            "type": [
              "int",
              "null"
            ]
          },
          {
            "name": "labelCode",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "serialCode1",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "serialCode2",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "serialCode3",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "serialCode4",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "claimOnDate",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "receivingLocationCode",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "vendorCode",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "updateCount",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "pieceCount",
            "type": [
              "int",
              "null"
            ]
          },
          {
            "name": "eCheckInCode",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "mediaTypeCode",
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
            "name": "suppressed",
            "type": "boolean"
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
          },
          {
            "name": "location",
            "type": [
              "null",
              {
                "name": "Location",
                "type": "record",
                "fields": [
                  {
                    "name": "code",
                    "type": "string"
                  },
                  {
                    "name": "label",
                    "type": "string"
                  }
                ]
              }
            ]
          },
          {
            "name": "holdings",
            "type": {
              "type": "array",
              "default": [],
              "items": [
                "null",
                {
                  "name": "HoldingPart",
                  "type": "record",
                  "fields": [
                    {
                      "name": "holding_string",
                      "type": [
                        "null",
                        "string"
                      ]
                    },
                    {
                      "name": "holding_ranges",
                      "type": {
                        "name": "HoldingRanges",
                        "type": "array",
                        "default": [],
                        "items": [
                          "null",
                          {
                            "name": "holding_range",
                            "type": "record",
                            "fields": [
                              {
                                "name": "Start",
                                "type": {
                                  "name": "Start",
                                  "type": "record",
                                  "fields": [
                                    {
                                      "name": "series",
                                      "type": [
                                        "null",
                                        "string"
                                      ]
                                    },
                                    {
                                      "name": "volume",
                                      "type": [
                                        "null",
                                        "int"
                                      ]
                                    },
                                    {
                                      "name": "issue",
                                      "type": [
                                        "null",
                                        "int"
                                      ]
                                    },
                                    {
                                      "name": "date",
                                      "type": [
                                        "null",
                                        {
                                          "name": "StartDateRange",
                                          "type": "record",
                                          "fields": [
                                            {
                                              "name": "range_start",
                                              "type": "string"
                                            },
                                            {
                                              "name": "range_end",
                                              "type": [
                                                "null",
                                                "string"
                                              ]
                                            }
                                          ]
                                        }
                                      ]
                                    }
                                  ]
                                }
                              },
                              {
                                "name": "End",
                                "type": {
                                  "name": "End",
                                  "type": "record",
                                  "fields": [
                                    {
                                      "name": "series",
                                      "type": [
                                        "null",
                                        "string"
                                      ]
                                    },
                                    {
                                      "name": "volume",
                                      "type": [
                                        "null",
                                        "int"
                                      ]
                                    },
                                    {
                                      "name": "issue",
                                      "type": [
                                        "null",
                                        "int"
                                      ]
                                    },
                                    {
                                      "name": "date",
                                      "type": [
                                        "null",
                                        {
                                          "name": "EndDateRange",
                                          "type": "record",
                                          "fields": [
                                            {
                                              "name": "range_start",
                                              "type": "string"
                                            },
                                            {
                                              "name": "range_end",
                                              "type": [
                                                "null",
                                                "string"
                                              ]
                                            }
                                          ]
                                        }
                                      ]
                                    }
                                  ]
                                }
                              },
                              {
                                "name": "ongoing",
                                "type": "boolean"
                              }
                            ]
                          }
                        ]
                      }
                    },
                    {
                      "name": "index",
                      "type": "boolean"
                    },
                    {
                      "name": "incomplete",
                      "type": "boolean"
                    },
                    {
                      "name": "negation",
                      "type": "boolean"
                    }
                  ]
                }
              ]
            }
          },
          {
            "name": "checkInCards",
            "type": {
              "name": "CheckInCards",
              "type": "array",
              "default": [],
              "items": [
                "null",
                {
                  "name": "CheckInCard",
                  "type": "record",
                  "fields": [
                    {
                      "name": "box_id",
                      "type": "int"
                    },
                    {
                      "name": "holding_id",
                      "type": "int"
                    },
                    {
                      "name": "box_count",
                      "type": "int"
                    },
                    {
                      "name": "enumeration",
                      "type": {
                        "name": "Enumeration",
                        "type": "record",
                        "fields": [
                          {
                            "name": "enumeration",
                            "type": [
                              "null",
                              "string"
                            ]
                          },
                          {
                            "name": "levels",
                            "type": {
                              "name": "Levels",
                              "type": "array",
                              "default": [],
                              "items": [
                                "null",
                                {
                                  "name": "level",
                                  "type": "string"
                                }
                              ]
                            }
                          }
                        ]
                      }
                    },
                    {
                      "name": "start_date",
                      "type": [
                        "null",
                        "string"
                      ]
                    },
                    {
                      "name": "end_date",
                      "type": [
                        "null",
                        "string"
                      ]
                    },
                    {
                      "name": "trans_start_date",
                      "type": [
                        "null",
                        "string"
                      ]
                    },
                    {
                      "name": "trans_end_date",
                      "type": [
                        "null",
                        "string"
                      ]
                    },
                    {
                      "name": "status",
                      "type": {
                        "name": "Status",
                        "type": "record",
                        "fields": [
                          {
                            "name": "code",
                            "type": "string"
                          },
                          {
                            "name": "label",
                            "type": "string"
                          }
                        ]
                      }
                    },
                    {
                      "name": "claim_count",
                      "type": [
                        "null",
                        "int"
                      ]
                    },
                    {
                      "name": "copy_count",
                      "type": [
                        "null",
                        "int"
                      ]
                    },
                    {
                      "name": "url",
                      "type": [
                        "null",
                        "string"
                      ]
                    },
                    {
                      "name": "suppressed",
                      "type": [
                        "null",
                        "string",
                        "boolean"
                      ]
                    },
                    {
                      "name": "note",
                      "type": [
                        "null",
                        "string"
                      ]
                    },
                    {
                      "name": "staff_note",
                      "type": [
                        "null",
                        "string"
                      ]
                    }
                  ]
                }
              ]
            }
          }
        ]
      },
      "stream": "Holding",
      "schema": "{\n    \"name\": \"Holding\",\n    \"type\": \"record\",\n    \"fields\": [\n        {\n            \"name\": \"id\",\n            \"type\": \"int\"\n        },\n        {\n            \"name\": \"bibIds\",\n            \"type\": {\n                \"type\": \"array\",\n                \"items\": \"int\",\n                \"default\": []\n            }\n        },\n        {\n            \"name\": \"bibIdLinks\",\n            \"type\": {\n                \"type\": \"array\",\n                \"items\": \"string\",\n                \"default\": []\n            }\n        },\n        {\n            \"name\": \"itemIds\",\n            \"type\": {\n                \"type\": \"array\",\n                \"items\": \"int\",\n                \"default\": []\n            }\n        },\n        {\n            \"name\": \"itemIdLinks\",\n            \"type\": {\n                \"type\": \"array\",\n                \"items\": \"string\",\n                \"default\": []\n            }\n        },\n        {\n            \"name\": \"inheritLocation\",\n            \"type\": \"boolean\"\n        },\n        {\n            \"name\": \"allocationRule\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"accountingUnit\",\n            \"type\": [\"int\", \"null\"]\n        },\n        {\n            \"name\": \"labelCode\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"serialCode1\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"serialCode2\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"serialCode3\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"serialCode4\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"claimOnDate\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"receivingLocationCode\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"vendorCode\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"updateCount\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"pieceCount\",\n            \"type\": [\"int\", \"null\"]\n        },\n        {\n            \"name\": \"eCheckInCode\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"mediaTypeCode\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"updatedDate\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"createdDate\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"deletedDate\",\n            \"type\": [\"string\", \"null\"]\n        },\n        {\n            \"name\": \"deleted\",\n            \"type\": \"boolean\"\n        },\n        {\n            \"name\": \"suppressed\",\n            \"type\": \"boolean\"\n        },\n        {\n            \"name\": \"fixedFields\",\n            \"type\": [\n                \"null\",\n                {\n                    \"type\": \"map\",\n                    \"values\": [\n                        {\n                            \"name\": \"fixedField\",\n                            \"type\": \"record\",\n                            \"fields\": [\n                                {\n                                    \"name\": \"label\",\n                                    \"type\": [\"string\", \"null\"]\n                                },\n                                {\n                                    \"name\": \"value\",\n                                    \"type\": [\"string\", \"null\", \"boolean\", \"int\"]\n                                },\n                                {\n                                    \"name\": \"display\",\n                                    \"type\": [\"string\", \"null\"]\n                                }\n                            ]\n                        }\n                    ]\n                }\n            ]\n        },\n        {\n            \"name\": \"varFields\",\n            \"type\": [\n                \"null\",\n                {\n                    \"type\": \"array\",\n                    \"items\": [\n                        {\n                            \"name\": \"varField\",\n                            \"type\": \"record\",\n                            \"fields\": [\n                                {\n                                    \"name\": \"fieldTag\",\n                                    \"type\": [\"string\", \"null\"]\n                                },\n                                {\n                                    \"name\": \"marcTag\",\n                                    \"type\": [\"string\", \"null\"]\n                                },\n                                {\n                                    \"name\": \"ind1\",\n                                    \"type\": [\"string\", \"null\"]\n                                },\n                                {\n                                    \"name\": \"ind2\",\n                                    \"type\": [\"string\", \"null\"]\n                                },\n                                {\n                                    \"name\": \"content\",\n                                    \"type\": [\"string\", \"null\", \"boolean\"]\n                                },\n                                {\n                                    \"name\": \"subfields\",\n                                    \"type\": [\n                                        \"null\",\n                                        {\n                                            \"type\": \"array\",\n                                            \"items\": [\n                                                {\n                                                    \"name\": \"subfield\",\n                                                    \"type\": \"record\",\n                                                    \"fields\": [\n                                                        {\n                                                            \"name\": \"tag\",\n                                                            \"type\": [\"string\", \"null\"]\n                                                        },\n                                                        {\n                                                            \"name\": \"content\",\n                                                            \"type\": [\"string\", \"null\"]\n                                                        }\n                                                    ]\n                                                }\n                                            ]\n                                        }\n                                    ]\n                                }\n                            ]\n                        }\n                    ]\n                }\n            ]\n        },\n        {\n            \"name\": \"location\",\n            \"type\": [\n                \"null\",\n                {\n                    \"name\": \"Location\",\n                    \"type\": \"record\",\n                    \"fields\": [\n                        {\n                            \"name\": \"code\",\n                            \"type\": \"string\"\n                        },\n                        {\n                            \"name\": \"label\",\n                            \"type\": \"string\"\n                        }\n                    ]\n                }\n            ]\n        },\n        {\n            \"name\": \"holdings\",\n            \"type\": {\n                \"type\": \"array\",\n                \"default\": [],\n                \"items\": [\n                    \"null\",\n                    {\n                        \"name\": \"HoldingPart\",\n                        \"type\": \"record\",\n                        \"fields\": [\n                            {\n                                \"name\": \"holding_string\",\n                                \"type\": [\"null\", \"string\"]\n                            },\n                            {\n                                \"name\": \"holding_ranges\",\n                                \"type\": {\n                                    \"name\": \"HoldingRanges\",\n                                    \"type\": \"array\",\n                                    \"default\": [],\n                                    \"items\": [\n                                        \"null\",\n                                        {\n                                            \"name\": \"holding_range\",\n                                            \"type\": \"record\",\n                                            \"fields\": [\n                                                {\n                                                    \"name\": \"Start\",\n                                                    \"type\": {\n                                                        \"name\": \"Start\",\n                                                        \"type\": \"record\",\n                                                        \"fields\": [\n                                                            {\n                                                                \"name\": \"series\",\n                                                                \"type\": [\"null\", \"string\"]\n                                                            },\n                                                            {\n                                                                \"name\": \"volume\",\n                                                                \"type\": [\"null\", \"int\"]\n                                                            },\n                                                            {\n                                                                \"name\": \"issue\",\n                                                                \"type\": [\"null\", \"int\"]\n                                                            },\n                                                            {\n                                                                \"name\": \"date\",\n                                                                \"type\": [\n                                                                    \"null\",\n                                                                    {\n                                                                        \"name\": \"StartDateRange\",\n                                                                        \"type\": \"record\",\n                                                                        \"fields\": [\n                                                                            {\n                                                                                \"name\": \"range_start\",\n                                                                                \"type\": \"string\"\n                                                                            },\n                                                                            {\n                                                                                \"name\": \"range_end\",\n                                                                                \"type\": [\"null\", \"string\"]\n                                                                            }\n                                                                        ]\n                                                                    }\n                                                                ]\n                                                                \n                                                            }\n                                                        ]\n                                                    }\n                                                },\n                                                {\n                                                    \"name\": \"End\",\n                                                    \"type\": {\n                                                        \"name\": \"End\",\n                                                        \"type\": \"record\",\n                                                        \"fields\": [\n                                                            {\n                                                                \"name\": \"series\",\n                                                                \"type\": [\"null\", \"string\"]\n                                                            },\n                                                            {\n                                                                \"name\": \"volume\",\n                                                                \"type\": [\"null\", \"int\"]\n                                                            },\n                                                            {\n                                                                \"name\": \"issue\",\n                                                                \"type\": [\"null\", \"int\"]\n                                                            },\n                                                            {\n                                                                \"name\": \"date\",\n                                                                \"type\": [\n                                                                    \"null\",\n                                                                    {\n                                                                        \"name\": \"EndDateRange\",\n                                                                        \"type\": \"record\",\n                                                                        \"fields\": [\n                                                                            {\n                                                                                \"name\": \"range_start\",\n                                                                                \"type\": \"string\"\n                                                                            },\n                                                                            {\n                                                                                \"name\": \"range_end\",\n                                                                                \"type\": [\"null\", \"string\"]\n                                                                            }\n                                                                        ]\n                                                                    }\n                                                                ]\n                                                                \n                                                            }\n                                                        ]\n                                                    }\n                                                },\n                                                {\n                                                    \"name\": \"ongoing\",\n                                                    \"type\": \"boolean\"\n                                                }\n                                            ]\n                                        }\n                                    ]\n                                }\n                            },\n                            {\n                                \"name\": \"index\",\n                                \"type\": \"boolean\" \n                            },\n                            {\n                                \"name\": \"incomplete\",\n                                \"type\": \"boolean\"\n                            },\n                            {\n                                \"name\": \"negation\",\n                                \"type\": \"boolean\"\n                            }\n                        ]\n                    }\n                ]\n            }\n        },\n        {\n            \"name\": \"checkInCards\",\n            \"type\": {\n                \"name\": \"CheckInCards\",\n                \"type\": \"array\",\n                \"default\": [],\n                \"items\": [\n                    \"null\",\n                    {\n                        \"name\": \"CheckInCard\",\n                        \"type\": \"record\",\n                        \"fields\": [\n                            {\n                                \"name\": \"box_id\",\n                                \"type\": \"int\"\n                            },\n                            {\n                                \"name\": \"holding_id\",\n                                \"type\": \"int\"\n                            },\n                            {\n                                \"name\": \"box_count\",\n                                \"type\": \"int\"\n                            },\n                            {\n                                \"name\": \"enumeration\",\n                                \"type\": {\n                                    \"name\": \"Enumeration\",\n                                    \"type\": \"record\",\n                                    \"fields\": [\n                                        {\n                                            \"name\": \"enumeration\",\n                                            \"type\": [\"null\", \"string\"]\n                                        },\n                                        {\n                                            \"name\": \"levels\",\n                                            \"type\": {\n                                                \"name\": \"Levels\",\n                                                \"type\": \"array\",\n                                                \"default\": [],\n                                                \"items\": [\n                                                    \"null\",\n                                                    {\n                                                        \"name\": \"level\",\n                                                        \"type\": \"string\"\n                                                    }\n                                                ]\n                                            }\n                                        }\n                                    ]\n                                }\n                            },\n                            {\n                                \"name\": \"start_date\",\n                                \"type\": [\"null\", \"string\"]\n                            },\n                            {\n                                \"name\": \"end_date\",\n                                \"type\": [\"null\", \"string\"]\n                            },\n                            {\n                                \"name\": \"trans_start_date\",\n                                \"type\": [\"null\", \"string\"]\n                            },\n                            {\n                                \"name\": \"trans_end_date\",\n                                \"type\": [\"null\", \"string\"]\n                            },\n                            {\n                                \"name\": \"status\",\n                                \"type\": {\n                                    \"name\": \"Status\",\n                                    \"type\": \"record\",\n                                    \"fields\": [\n                                        {\n                                            \"name\": \"code\",\n                                            \"type\": \"string\"\n                                        },\n                                        {\n                                            \"name\": \"label\",\n                                            \"type\": \"string\"\n                                        }\n                                    ]\n                                }\n                            },\n                            {\n                                \"name\": \"claim_count\",\n                                \"type\": [\"null\", \"int\"]\n                            },\n                            {\n                                \"name\": \"copy_count\",\n                                \"type\": [\"null\", \"int\"]\n                            },\n                            {\n                                \"name\": \"url\",\n                                \"type\": [\"null\", \"string\"]\n                            },\n                            {\n                                \"name\": \"suppressed\",\n                                \"type\": [\"null\", \"string\", \"boolean\"]\n                            },\n                            {\n                                \"name\": \"note\",\n                                \"type\": [\"null\", \"string\"]\n                            },\n                            {\n                                \"name\": \"staff_note\",\n                                \"type\": [\"null\", \"string\"]\n                            }\n                        ]\n                    }\n                ]\n            }\n        }\n    ]\n}"
    },
    {
      "id": 256,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "HoldRequest",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "int"
          },
          {
            "name": "jobId",
            "type": "string"
          },
          {
            "name": "patron",
            "type": "string"
          },
          {
            "name": "nyplSource",
            "type": "string"
          },
          {
            "name": "createdDate",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "updatedDate",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "processed",
            "type": "boolean"
          },
          {
            "name": "requestType",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "recordType",
            "type": "string"
          },
          {
            "name": "record",
            "type": "string"
          },
          {
            "name": "pickupLocation",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "neededBy",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "numberOfCopies",
            "type": [
              "null",
              "int"
            ]
          },
          {
            "name": "deliveryLocation",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "docDeliveryData",
            "default": null,
            "type": [
              "null",
              {
                "name": "docDeliveryData",
                "type": "record",
                "fields": [
                  {
                    "name": "emailAddress",
                    "type": "string"
                  },
                  {
                    "name": "chapterTitle",
                    "type": "string"
                  },
                  {
                    "name": "startPage",
                    "type": "string"
                  },
                  {
                    "name": "endPage",
                    "type": "string"
                  },
                  {
                    "name": "author",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "volume",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "issue",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "requestNotes",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "date",
                    "type": [
                      "null",
                      "string"
                    ]
                  }
                ]
              }
            ]
          },
          {
            "name": "error",
            "type": [
              "null",
              "string"
            ]
          }
        ]
      },
      "stream": "HoldRequest",
      "schema": "{\"name\":\"HoldRequest\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"int\"},{\"name\":\"jobId\",\"type\":\"string\"},{\"name\":\"patron\",\"type\":\"string\"},{\"name\":\"nyplSource\",\"type\":\"string\"},{\"name\":\"createdDate\",\"type\":[\"null\",\"string\"]},{\"name\":\"updatedDate\",\"type\":[\"null\",\"string\"]},{\"name\":\"success\",\"type\":\"boolean\"},{\"name\":\"processed\",\"type\":\"boolean\"},{\"name\":\"requestType\",\"type\":[\"null\",\"string\"]},{\"name\":\"recordType\",\"type\":\"string\"},{\"name\":\"record\",\"type\":\"string\"},{\"name\":\"pickupLocation\",\"type\":[\"null\",\"string\"]},{\"name\":\"neededBy\",\"type\":[\"null\",\"string\"]},{\"name\":\"numberOfCopies\",\"type\":[\"null\",\"int\"]},{\"name\":\"deliveryLocation\",\"type\":[\"null\",\"string\"]},{\"name\":\"docDeliveryData\",\"default\":null,\"type\":[\"null\",{\"name\":\"docDeliveryData\",\"type\":\"record\",\"fields\":[{\"name\":\"emailAddress\",\"type\":\"string\"},{\"name\":\"chapterTitle\",\"type\":\"string\"},{\"name\":\"startPage\",\"type\":\"string\"},{\"name\":\"endPage\",\"type\":\"string\"},{\"name\":\"author\",\"type\":[\"null\",\"string\"]},{\"name\":\"volume\",\"type\":[\"null\",\"string\"]},{\"name\":\"issue\",\"type\":[\"null\",\"string\"]},{\"name\":\"requestNotes\",\"type\":[\"null\",\"string\"]},{\"name\":\"date\",\"type\":[\"null\",\"string\"]}]}]},{\"name\":\"error\",\"type\":[\"null\",\"string\"]}]}"
    },
    {
      "id": 287,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "HoldRequest",
        "type": "record",
        "fields": [
          {
            "name": "requestId",
            "type": "string"
          },
          {
            "name": "trackingId",
            "type": "string"
          },
          {
            "name": "patronId",
            "type": "string"
          },
          {
            "name": "nyplSource",
            "type": "string"
          },
          {
            "name": "createdDate",
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
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "processed",
            "type": "boolean"
          },
          {
            "name": "requestType",
            "type": "string"
          },
          {
            "name": "recordType",
            "type": "string"
          },
          {
            "name": "recordNumber",
            "type": "string"
          },
          {
            "name": "pickupLocation",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "neededBy",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "numberOfCopies",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "docDeliveryData",
            "type": [
              "null",
              {
                "name": "docDeliveryData",
                "type": "record",
                "fields": [
                  {
                    "name": "emailAddress",
                    "type": [
                      "string",
                      "null"
                    ]
                  },
                  {
                    "name": "chapterTitle",
                    "type": [
                      "string",
                      "null"
                    ]
                  },
                  {
                    "name": "volume",
                    "type": [
                      "string",
                      "null"
                    ]
                  },
                  {
                    "name": "issue",
                    "type": [
                      "string",
                      "null"
                    ]
                  },
                  {
                    "name": "startPage",
                    "type": [
                      "string",
                      "null"
                    ]
                  },
                  {
                    "name": "endPage",
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
      "stream": "HoldRequestProcessed",
      "schema": "{\"name\":\"HoldRequest\",\"type\":\"record\",\"fields\":[{\"name\":\"requestId\",\"type\":\"string\"},{\"name\":\"trackingId\",\"type\":\"string\"},{\"name\":\"patronId\",\"type\":\"string\"},{\"name\":\"nyplSource\",\"type\":\"string\"},{\"name\":\"createdDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"updatedDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"success\",\"type\":\"boolean\"},{\"name\":\"processed\",\"type\":\"boolean\"},{\"name\":\"requestType\",\"type\":\"string\"},{\"name\":\"recordType\",\"type\":\"string\"},{\"name\":\"recordNumber\",\"type\":\"string\"},{\"name\":\"pickupLocation\",\"type\":[\"string\",\"null\"]},{\"name\":\"neededBy\",\"type\":[\"string\",\"null\"]},{\"name\":\"numberOfCopies\",\"type\":[\"string\",\"null\"]},{\"name\":\"docDeliveryData\",\"type\":[\"null\",{\"name\":\"docDeliveryData\",\"type\":\"record\",\"fields\":[{\"name\":\"emailAddress\",\"type\":[\"string\",\"null\"]},{\"name\":\"chapterTitle\",\"type\":[\"string\",\"null\"]},{\"name\":\"volume\",\"type\":[\"string\",\"null\"]},{\"name\":\"issue\",\"type\":[\"string\",\"null\"]},{\"name\":\"startPage\",\"type\":[\"string\",\"null\"]},{\"name\":\"endPage\",\"type\":[\"string\",\"null\"]}]}]}]}"
    },
    {
      "id": 4,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "HoldRequest",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "int"
          },
          {
            "name": "jobId",
            "type": "string"
          },
          {
            "name": "patron",
            "type": "string"
          },
          {
            "name": "nyplSource",
            "type": "string"
          },
          {
            "name": "createdDate",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "updatedDate",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "processed",
            "type": "boolean"
          },
          {
            "name": "requestType",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "recordType",
            "type": "string"
          },
          {
            "name": "record",
            "type": "string"
          },
          {
            "name": "pickupLocation",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "neededBy",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "numberOfCopies",
            "type": [
              "null",
              "int"
            ]
          },
          {
            "name": "deliveryLocation",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "docDeliveryData",
            "default": null,
            "type": [
              "null",
              {
                "name": "docDeliveryData",
                "type": "record",
                "fields": [
                  {
                    "name": "emailAddress",
                    "type": "string"
                  },
                  {
                    "name": "chapterTitle",
                    "type": "string"
                  },
                  {
                    "name": "startPage",
                    "type": "string"
                  },
                  {
                    "name": "endPage",
                    "type": "string"
                  },
                  {
                    "name": "author",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "volume",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "issue",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "requestNotes",
                    "type": [
                      "null",
                      "string"
                    ]
                  }
                ]
              }
            ]
          },
          {
            "name": "error",
            "type": [
              "null",
              "string"
            ]
          }
        ]
      },
      "stream": "HoldRequest-production",
      "schema": "{\"name\":\"HoldRequest\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"int\"},{\"name\":\"jobId\",\"type\":\"string\"},{\"name\":\"patron\",\"type\":\"string\"},{\"name\":\"nyplSource\",\"type\":\"string\"},{\"name\":\"createdDate\",\"type\":[\"null\",\"string\"]},{\"name\":\"updatedDate\",\"type\":[\"null\",\"string\"]},{\"name\":\"success\",\"type\":\"boolean\"},{\"name\":\"processed\",\"type\":\"boolean\"},{\"name\":\"requestType\",\"type\":[\"null\",\"string\"]},{\"name\":\"recordType\",\"type\":\"string\"},{\"name\":\"record\",\"type\":\"string\"},{\"name\":\"pickupLocation\",\"type\":[\"null\",\"string\"]},{\"name\":\"neededBy\",\"type\":[\"null\",\"string\"]},{\"name\":\"numberOfCopies\",\"type\":[\"null\",\"int\"]},{\"name\":\"deliveryLocation\",\"type\":[\"null\",\"string\"]},{\"name\":\"docDeliveryData\",\"default\":null,\"type\":[\"null\",{\"name\":\"docDeliveryData\",\"type\":\"record\",\"fields\":[{\"name\":\"emailAddress\",\"type\":\"string\"},{\"name\":\"chapterTitle\",\"type\":\"string\"},{\"name\":\"startPage\",\"type\":\"string\"},{\"name\":\"endPage\",\"type\":\"string\"},{\"name\":\"author\",\"type\":[\"null\",\"string\"]},{\"name\":\"volume\",\"type\":[\"null\",\"string\"]},{\"name\":\"issue\",\"type\":[\"null\",\"string\"]},{\"name\":\"requestNotes\",\"type\":[\"null\",\"string\"]}]}]},{\"name\":\"error\",\"type\":[\"null\",\"string\"]}]}"
    },
    {
      "id": 292,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "HoldRequestResult",
        "type": "record",
        "fields": [
          {
            "name": "jobId",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "error",
            "default": null,
            "type": [
              "null",
              {
                "name": "Error",
                "type": "record",
                "fields": [
                  {
                    "name": "message",
                    "type": "string"
                  },
                  {
                    "name": "type",
                    "type": "string"
                  }
                ]
              }
            ]
          },
          {
            "name": "holdRequestId",
            "type": "int"
          }
        ]
      },
      "stream": "HoldRequestResult",
      "schema": "{\n  \"name\": \"HoldRequestResult\",\n  \"type\": \"record\",\n  \"fields\": [\n    {\n      \"name\": \"jobId\",\n      \"type\": [\n        \"null\",\n        \"string\"\n      ]\n    },\n    {\n      \"name\": \"success\",\n      \"type\": \"boolean\"\n    },\n    {\n      \"name\": \"error\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        {\n          \"name\": \"Error\",\n          \"type\": \"record\",\n          \"fields\": [\n            {\n              \"name\": \"message\",\n              \"type\": \"string\"\n            },\n            {\n              \"name\": \"type\",\n              \"type\": \"string\"\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"holdRequestId\",\n      \"type\": \"int\"\n    }\n  ]\n}"
    },
    {
      "id": 291,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "HoldRequest",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "int"
          },
          {
            "name": "jobId",
            "type": "string"
          },
          {
            "name": "patron",
            "type": "string"
          },
          {
            "name": "nyplSource",
            "type": "string"
          },
          {
            "name": "createdDate",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "updatedDate",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "processed",
            "type": "boolean"
          },
          {
            "name": "requestType",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "recordType",
            "type": "string"
          },
          {
            "name": "record",
            "type": "string"
          },
          {
            "name": "pickupLocation",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "neededBy",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "numberOfCopies",
            "type": [
              "null",
              "int"
            ]
          },
          {
            "name": "deliveryLocation",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "docDeliveryData",
            "default": null,
            "type": [
              "null",
              {
                "name": "docDeliveryData",
                "type": "record",
                "fields": [
                  {
                    "name": "emailAddress",
                    "type": "string"
                  },
                  {
                    "name": "chapterTitle",
                    "type": "string"
                  },
                  {
                    "name": "startPage",
                    "type": "string"
                  },
                  {
                    "name": "endPage",
                    "type": "string"
                  },
                  {
                    "name": "author",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "volume",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "issue",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "requestNotes",
                    "type": [
                      "null",
                      "string"
                    ]
                  }
                ]
              }
            ]
          }
        ]
      },
      "stream": "HoldRequestService",
      "schema": "{\"name\":\"HoldRequest\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"int\"},{\"name\":\"jobId\",\"type\":\"string\"},{\"name\":\"patron\",\"type\":\"string\"},{\"name\":\"nyplSource\",\"type\":\"string\"},{\"name\":\"createdDate\",\"type\":[\"null\",\"string\"]},{\"name\":\"updatedDate\",\"type\":[\"null\",\"string\"]},{\"name\":\"success\",\"type\":\"boolean\"},{\"name\":\"processed\",\"type\":\"boolean\"},{\"name\":\"requestType\",\"type\":[\"null\",\"string\"]},{\"name\":\"recordType\",\"type\":\"string\"},{\"name\":\"record\",\"type\":\"string\"},{\"name\":\"pickupLocation\",\"type\":[\"null\",\"string\"]},{\"name\":\"neededBy\",\"type\":[\"null\",\"string\"]},{\"name\":\"numberOfCopies\",\"type\":[\"null\",\"int\"]},{\"name\":\"deliveryLocation\",\"type\":[\"null\",\"string\"]},{\"name\":\"docDeliveryData\",\"default\":null,\"type\":[\"null\",{\"name\":\"docDeliveryData\",\"type\":\"record\",\"fields\":[{\"name\":\"emailAddress\",\"type\":\"string\"},{\"name\":\"chapterTitle\",\"type\":\"string\"},{\"name\":\"startPage\",\"type\":\"string\"},{\"name\":\"endPage\",\"type\":\"string\"},{\"name\":\"author\",\"type\":[\"null\",\"string\"]},{\"name\":\"volume\",\"type\":[\"null\",\"string\"]},{\"name\":\"issue\",\"type\":[\"null\",\"string\"]},{\"name\":\"requestNotes\",\"type\":[\"null\",\"string\"]}]}]}]}"
    },
    {
      "id": 274,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "fields": [
          {
            "name": "uri",
            "type": "string"
          },
          {
            "name": "type",
            "type": "string"
          }
        ],
        "name": "IndexDocument",
        "type": "record"
      },
      "stream": "IndexDocument",
      "schema": "{\"fields\":[{\"name\":\"uri\",\"type\":\"string\"},{\"name\":\"type\",\"type\":\"string\"}],\"name\":\"IndexDocument\",\"type\":\"record\"}"
    },
    {
      "id": 275,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "IndexDocumentProcessed",
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
          }
        ]
      },
      "stream": "IndexDocumentProcessed",
      "schema": "{\"name\":\"IndexDocumentProcessed\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"string\"},{\"name\":\"nyplSource\",\"type\":[\"string\",\"null\"]},{\"name\":\"nyplType\",\"type\":[\"string\",\"null\"]}]}"
    },
    {
      "id": 286,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "IndexDocumentQueue",
        "type": "record",
        "fields": [
          {
            "name": "uri",
            "type": "string"
          },
          {
            "name": "type",
            "type": "string"
          }
        ]
      },
      "stream": "IndexDocumentQueue",
      "schema": "{\"name\":\"IndexDocumentQueue\",\"type\":\"record\",\"fields\":[{\"name\":\"uri\",\"type\":\"string\"},{\"name\":\"type\",\"type\":\"string\"}]}"
    },
    {
      "id": 257,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "Item",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "string"
          },
          {
            "name": "nyplSource",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "nyplType",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "updatedDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "createdDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "deletedDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "deleted",
            "type": [
              "boolean",
              "null"
            ]
          },
          {
            "name": "bibIds",
            "type": [
              "null",
              {
                "type": "array",
                "items": "string"
              }
            ],
            "default": null
          },
          {
            "name": "location",
            "type": [
              "null",
              {
                "name": "location",
                "type": "record",
                "fields": [
                  {
                    "name": "code",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "name",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  }
                ]
              }
            ],
            "default": null
          },
          {
            "name": "status",
            "type": [
              "null",
              {
                "name": "status",
                "type": "record",
                "fields": [
                  {
                    "name": "code",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "display",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "duedate",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  }
                ]
              }
            ],
            "default": null
          },
          {
            "name": "barcode",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "callNumber",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "itemType",
            "type": [
              "null",
              "string"
            ],
            "default": null
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
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "value",
                        "type": [
                          "null",
                          "string",
                          "int",
                          "boolean"
                        ],
                        "default": null
                      },
                      {
                        "name": "display",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      }
                    ]
                  }
                ]
              }
            ],
            "default": null
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
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "marcTag",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "ind1",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "ind2",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "content",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "subfields",
                        "type": [
                          "null",
                          {
                            "type": "array",
                            "items": [
                              {
                                "name": "subField",
                                "type": "record",
                                "fields": [
                                  {
                                    "name": "tag",
                                    "type": [
                                      "null",
                                      "string"
                                    ]
                                  },
                                  {
                                    "name": "content",
                                    "type": [
                                      "null",
                                      "string"
                                    ],
                                    "default": null
                                  }
                                ]
                              }
                            ]
                          }
                        ],
                        "default": null
                      }
                    ]
                  }
                ]
              }
            ],
            "default": null
          }
        ]
      },
      "stream": "Item",
      "schema": "{\n  \"name\": \"Item\",\n  \"type\": \"record\",\n  \"fields\": [{\n    \"name\": \"id\",\n    \"type\": \"string\"\n  }, {\n    \"name\": \"nyplSource\",\n    \"type\": [\"null\", \"string\"],\n    \"default\": null\n  }, {\n    \"name\": \"nyplType\",\n    \"type\": [\"null\", \"string\"],\n    \"default\": null\n  }, {\n    \"name\": \"updatedDate\",\n    \"type\": [\"null\", \"string\"],\n    \"default\": null\n  }, {\n    \"name\": \"createdDate\",\n    \"type\": [\"null\", \"string\"],\n    \"default\": null\n  }, {\n    \"name\": \"deletedDate\",\n    \"type\": [\"null\", \"string\"],\n    \"default\": null\n  }, {\n    \"name\": \"deleted\",\n    \"type\": [\"boolean\", \"null\"]\n  }, {\n    \"name\": \"bibIds\",\n    \"type\": [\"null\", {\n      \"type\": \"array\",\n      \"items\": \"string\"\n    }],\n    \"default\": null\n  }, {\n    \"name\": \"location\",\n    \"type\": [\"null\", {\n      \"name\": \"location\",\n      \"type\": \"record\",\n      \"fields\": [{\n        \"name\": \"code\",\n        \"type\": [\"null\", \"string\"],\n        \"default\": null\n      }, {\n        \"name\": \"name\",\n        \"type\": [\"null\", \"string\"],\n        \"default\": null\n      }]\n    }],\n    \"default\": null\n  }, {\n    \"name\": \"status\",\n    \"type\": [\"null\", {\n      \"name\": \"status\",\n      \"type\": \"record\",\n      \"fields\": [{\n        \"name\": \"code\",\n        \"type\": [\"null\", \"string\"],\n        \"default\": null\n      }, {\n        \"name\": \"display\",\n        \"type\": [\"null\", \"string\"],\n        \"default\": null\n      }, {\n        \"name\": \"duedate\",\n        \"type\": [\"null\", \"string\"],\n        \"default\": null\n      }]\n    }],\n    \"default\": null\n  }, {\n    \"name\": \"barcode\",\n    \"type\": [\"null\", \"string\"],\n    \"default\": null\n  }, {\n    \"name\": \"callNumber\",\n    \"type\": [\"null\", \"string\"],\n    \"default\": null\n  }, {\n    \"name\": \"itemType\",\n    \"type\": [\"null\", \"string\"],\n    \"default\": null\n  }, {\n    \"name\": \"fixedFields\",\n    \"type\": [\"null\", {\n      \"type\": \"map\",\n      \"values\": [{\n        \"name\": \"fixedField\",\n        \"type\": \"record\",\n        \"fields\": [{\n          \"name\": \"label\",\n          \"type\": [\"null\", \"string\"],\n          \"default\": null\n        }, {\n          \"name\": \"value\",\n          \"type\": [\"null\", \"string\", \"int\", \"boolean\"],\n          \"default\": null\n        }, {\n          \"name\": \"display\",\n          \"type\": [\"null\", \"string\"],\n          \"default\": null\n        }]\n      }]\n    }],\n    \"default\": null\n  }, {\n    \"name\": \"varFields\",\n    \"type\": [\"null\", {\n      \"type\": \"array\",\n      \"items\": [{\n        \"name\": \"varField\",\n        \"type\": \"record\",\n        \"fields\": [{\n          \"name\": \"fieldTag\",\n          \"type\": [\"null\", \"string\"],\n          \"default\": null\n        }, {\n          \"name\": \"marcTag\",\n          \"type\": [\"null\", \"string\"],\n          \"default\": null\n        }, {\n          \"name\": \"ind1\",\n          \"type\": [\"null\", \"string\"],\n          \"default\": null\n        }, {\n          \"name\": \"ind2\",\n          \"type\": [\"null\", \"string\"],\n          \"default\": null\n        }, {\n          \"name\": \"content\",\n          \"type\": [\"null\", \"string\"],\n          \"default\": null\n        }, {\n          \"name\": \"subfields\",\n          \"type\": [\"null\", {\n            \"type\": \"array\",\n            \"items\": [{\n              \"name\": \"subField\",\n              \"type\": \"record\",\n              \"fields\": [{\n                \"name\": \"tag\",\n                \"type\": [\"null\", \"string\"]\n              }, {\n                \"name\": \"content\",\n                \"type\": [\"null\", \"string\"],\n                \"default\": null\n              }]\n            }]\n          }],\n          \"default\": null\n        }]\n      }]\n    }],\n    \"default\": null\n  }]\n}"
    },
    {
      "id": 284,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "ItemPostRequest",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "string"
          },
          {
            "name": "nyplSource",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "nyplType",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "updatedDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "createdDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "deletedDate",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "deleted",
            "type": [
              "null",
              "boolean"
            ],
            "default": null
          },
          {
            "name": "bibIds",
            "type": [
              "null",
              {
                "type": "array",
                "items": "string"
              }
            ],
            "default": null
          },
          {
            "name": "location",
            "type": [
              "null",
              {
                "name": "location",
                "type": "record",
                "fields": [
                  {
                    "name": "code",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "name",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  }
                ]
              }
            ],
            "default": null
          },
          {
            "name": "status",
            "type": [
              "null",
              {
                "name": "status",
                "type": "record",
                "fields": [
                  {
                    "name": "code",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "display",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  },
                  {
                    "name": "duedate",
                    "type": [
                      "null",
                      "string"
                    ],
                    "default": null
                  }
                ]
              }
            ],
            "default": null
          },
          {
            "name": "barcode",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "callNumber",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "itemType",
            "type": [
              "null",
              "string"
            ],
            "default": null
          },
          {
            "name": "fixedFields",
            "type": [
              "null",
              {
                "type": "map",
                "values": [
                  "null",
                  {
                    "name": "fixedField",
                    "type": "record",
                    "fields": [
                      {
                        "name": "label",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "value",
                        "type": [
                          "null",
                          "string",
                          "int",
                          "boolean"
                        ],
                        "default": null
                      },
                      {
                        "name": "display",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      }
                    ]
                  }
                ]
              }
            ],
            "default": null
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
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "marcTag",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "ind1",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "ind2",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "content",
                        "type": [
                          "null",
                          "string"
                        ],
                        "default": null
                      },
                      {
                        "name": "subfields",
                        "type": [
                          "null",
                          {
                            "type": "array",
                            "items": [
                              {
                                "name": "subField",
                                "type": "record",
                                "fields": [
                                  {
                                    "name": "tag",
                                    "type": [
                                      "null",
                                      "string"
                                    ],
                                    "default": null
                                  },
                                  {
                                    "name": "content",
                                    "type": [
                                      "null",
                                      "string"
                                    ],
                                    "default": null
                                  }
                                ]
                              }
                            ]
                          }
                        ],
                        "default": null
                      }
                    ]
                  }
                ]
              }
            ],
            "default": null
          }
        ]
      },
      "stream": "ItemPostRequest",
      "schema": "{\n      \"name\": \"ItemPostRequest\",\n      \"type\": \"record\",\n      \"fields\": [\n        {\n          \"name\": \"id\",\n          \"type\": \"string\"\n        },\n        {\n          \"name\": \"nyplSource\",\n          \"type\": [\n            \"null\",\n            \"string\"\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"nyplType\",\n          \"type\": [\n            \"null\",\n            \"string\"\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"updatedDate\",\n          \"type\": [\n            \"null\",\n            \"string\"\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"createdDate\",\n          \"type\": [\n            \"null\",\n            \"string\"\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"deletedDate\",\n          \"type\": [\n            \"null\",\n            \"string\"\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"deleted\",\n          \"type\": [\n            \"null\",\n            \"boolean\"\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"bibIds\",\n          \"type\": [\n            \"null\",\n            {\n              \"type\": \"array\",\n              \"items\": \"string\"\n            }\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"location\",\n          \"type\": [\n            \"null\",\n            {\n              \"name\": \"location\",\n              \"type\": \"record\",\n              \"fields\": [\n                {\n                  \"name\": \"code\",\n                  \"type\": [\n                    \"null\",\n                    \"string\"\n                  ],\n                  \"default\": null\n                },\n                {\n                  \"name\": \"name\",\n                  \"type\": [\n                    \"null\",\n                    \"string\"\n                  ],\n                  \"default\": null\n                }\n              ]\n            }\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"status\",\n          \"type\": [\n            \"null\",\n            {\n              \"name\": \"status\",\n              \"type\": \"record\",\n              \"fields\": [\n                {\n                  \"name\": \"code\",\n                  \"type\": [\n                    \"null\",\n                    \"string\"\n                  ],\n                  \"default\": null\n                },\n                {\n                  \"name\": \"display\",\n                  \"type\": [\n                    \"null\",\n                    \"string\"\n                  ],\n                  \"default\": null\n                },\n                {\n                  \"name\": \"duedate\",\n                  \"type\": [\n                    \"null\",\n                    \"string\"\n                  ],\n                  \"default\": null\n                }\n              ]\n            }\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"barcode\",\n          \"type\": [\n            \"null\",\n            \"string\"\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"callNumber\",\n          \"type\": [\n            \"null\",\n            \"string\"\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"itemType\",\n          \"type\": [\n            \"null\",\n            \"string\"\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"fixedFields\",\n          \"type\": [\n            \"null\",\n            {\n              \"type\": \"map\",\n              \"values\": [\n                \"null\",\n                {\n                  \"name\": \"fixedField\",\n                  \"type\": \"record\",\n                  \"fields\": [\n                    {\n                      \"name\": \"label\",\n                      \"type\": [\n                        \"null\",\n                        \"string\"\n                      ],\n                      \"default\": null\n                    },\n                    {\n                      \"name\": \"value\",\n                      \"type\": [\n                        \"null\",\n                        \"string\",\n                        \"int\",\n                        \"boolean\"\n                      ],\n                      \"default\": null\n                    },\n                    {\n                      \"name\": \"display\",\n                      \"type\": [\n                        \"null\",\n                        \"string\"\n                      ],\n                      \"default\": null\n                    }\n                  ]\n                }\n              ]\n            }\n          ],\n          \"default\": null\n        },\n        {\n          \"name\": \"varFields\",\n          \"type\": [\n            \"null\",\n            {\n              \"type\": \"array\",\n              \"items\": [\n                {\n                  \"name\": \"varField\",\n                  \"type\": \"record\",\n                  \"fields\": [\n                    {\n                      \"name\": \"fieldTag\",\n                      \"type\": [\n                        \"null\",\n                        \"string\"\n                      ],\n                      \"default\": null\n                    },\n                    {\n                      \"name\": \"marcTag\",\n                      \"type\": [\n                        \"null\",\n                        \"string\"\n                      ],\n                      \"default\": null\n                    },\n                    {\n                      \"name\": \"ind1\",\n                      \"type\": [\n                        \"null\",\n                        \"string\"\n                      ],\n                      \"default\": null\n                    },\n                    {\n                      \"name\": \"ind2\",\n                      \"type\": [\n                        \"null\",\n                        \"string\"\n                      ],\n                      \"default\": null\n                    },\n                    {\n                      \"name\": \"content\",\n                      \"type\": [\n                        \"null\",\n                        \"string\"\n                      ],\n                      \"default\": null\n                    },\n                    {\n                      \"name\": \"subfields\",\n                      \"type\": [\n                        \"null\",\n                        {\n                          \"type\": \"array\",\n                          \"items\": [\n                            {\n                              \"name\": \"subField\",\n                              \"type\": \"record\",\n                              \"fields\": [\n                                {\n                                  \"name\": \"tag\",\n                                  \"type\": [\n                                    \"null\",\n                                    \"string\"\n                                  ],\n                                  \"default\": null\n                                },\n                                {\n                                  \"name\": \"content\",\n                                  \"type\": [\n                                    \"null\",\n                                    \"string\"\n                                  ],\n                                  \"default\": null\n                                }\n                              ]\n                            }\n                          ]\n                        }\n                      ],\n                      \"default\": null\n                    }\n                  ]\n                }\n              ]\n            }\n          ],\n          \"default\": null\n        }\n      ]\n    }"
    },
    {
      "id": 259,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "Job",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "string"
          },
          {
            "name": "started",
            "type": "boolean"
          },
          {
            "name": "finished",
            "type": "boolean"
          },
          {
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "notices",
            "type": [
              "null",
              {
                "type": "array",
                "items": [
                  {
                    "name": "JobNotice",
                    "type": "record",
                    "fields": [
                      {
                        "name": "text",
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
            "name": "successRedirectUrl",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "startCallbackUrl",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "failureCallbackUrl",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "updateCallbackUrl",
            "type": [
              "string",
              "null"
            ]
          }
        ]
      },
      "stream": "Job",
      "schema": "{\"name\":\"Job\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"string\"},{\"name\":\"started\",\"type\":\"boolean\"},{\"name\":\"finished\",\"type\":\"boolean\"},{\"name\":\"success\",\"type\":\"boolean\"},{\"name\":\"notices\",\"type\":[\"null\",{\"type\":\"array\",\"items\":[{\"name\":\"JobNotice\",\"type\":\"record\",\"fields\":[{\"name\":\"text\",\"type\":[\"string\",\"null\"]}]}]}]},{\"name\":\"successRedirectUrl\",\"type\":[\"string\",\"null\"]},{\"name\":\"startCallbackUrl\",\"type\":[\"string\",\"null\"]},{\"name\":\"failureCallbackUrl\",\"type\":[\"string\",\"null\"]},{\"name\":\"updateCallbackUrl\",\"type\":[\"string\",\"null\"]}]}"
    },
    {
      "id": 5,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "NewPatron",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "int"
          },
          {
            "name": "names",
            "default": null,
            "type": [
              "null",
              {
                "type": "array",
                "items": "string"
              }
            ]
          },
          {
            "name": "barcodes",
            "default": null,
            "type": [
              "null",
              {
                "type": "array",
                "items": "string"
              }
            ]
          },
          {
            "name": "pin",
            "default": null,
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "expirationDate",
            "default": null,
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "birthDate",
            "default": null,
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "emails",
            "default": null,
            "type": [
              "null",
              {
                "type": "array",
                "items": "string"
              }
            ]
          },
          {
            "name": "patronType",
            "type": "int"
          },
          {
            "name": "patronCodes",
            "default": null,
            "type": [
              "null",
              {
                "name": "patronCodes",
                "type": "record",
                "fields": [
                  {
                    "name": "pcode1",
                    "default": null,
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "pcode2",
                    "default": null,
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "pcode3",
                    "default": null,
                    "type": [
                      "null",
                      "int"
                    ]
                  },
                  {
                    "name": "pcode4",
                    "default": null,
                    "type": [
                      "null",
                      "int"
                    ]
                  }
                ]
              }
            ]
          },
          {
            "name": "blockInfo",
            "default": null,
            "type": [
              "null",
              {
                "name": "blockInfo",
                "type": "record",
                "fields": [
                  {
                    "name": "code",
                    "default": null,
                    "type": [
                      "null",
                      "string"
                    ]
                  }
                ]
              }
            ]
          },
          {
            "name": "addresses",
            "default": null,
            "type": [
              "null",
              {
                "type": "array",
                "default": null,
                "items": [
                  "null",
                  {
                    "name": "address",
                    "type": "record",
                    "fields": [
                      {
                        "name": "lines",
                        "default": null,
                        "type": [
                          "null",
                          {
                            "type": "array",
                            "items": "string"
                          }
                        ]
                      },
                      {
                        "name": "type",
                        "default": null,
                        "type": [
                          "null",
                          "string"
                        ]
                      }
                    ]
                  }
                ]
              }
            ]
          },
          {
            "name": "phones",
            "default": null,
            "type": [
              "null",
              {
                "type": "array",
                "default": null,
                "items": [
                  "null",
                  {
                    "name": "phone",
                    "type": "record",
                    "fields": [
                      {
                        "name": "number",
                        "default": null,
                        "type": [
                          "null",
                          "string"
                        ]
                      },
                      {
                        "name": "type",
                        "default": null,
                        "type": [
                          "null",
                          "string"
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
      "stream": "NewPatron",
      "schema": "{\n  \"name\": \"NewPatron\",\n  \"type\": \"record\",\n  \"fields\": [\n    {\n      \"name\": \"id\",\n      \"type\": \"int\"\n    },\n    {\n      \"name\": \"names\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        {\n          \"type\": \"array\",\n          \"items\": \"string\"\n        }\n      ]\n    },\n    {\n      \"name\": \"barcodes\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        {\n          \"type\": \"array\",\n          \"items\": \"string\"\n        }\n      ]\n    },\n    {\n      \"name\": \"pin\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        \"string\"\n      ]\n    },\n    {\n      \"name\": \"expirationDate\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        \"string\"\n      ]\n    },\n    {\n      \"name\": \"birthDate\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        \"string\"\n      ]\n    },\n    {\n      \"name\": \"emails\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        {\n          \"type\": \"array\",\n          \"items\": \"string\"\n        }\n      ]\n    },\n    {\n      \"name\": \"patronType\",\n      \"type\": \"int\"\n    },\n    {\n      \"name\": \"patronCodes\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        {\n          \"name\": \"patronCodes\",\n          \"type\": \"record\",\n          \"fields\": [\n            {\n              \"name\": \"pcode1\",\n              \"default\": null,\n              \"type\": [\n                \"null\",\n                \"string\"\n              ]\n            },\n            {\n              \"name\": \"pcode2\",\n              \"default\": null,\n              \"type\": [\n                \"null\",\n                \"string\"\n              ]\n            },\n            {\n              \"name\": \"pcode3\",\n              \"default\": null,\n              \"type\": [\n                \"null\",\n                \"int\"\n              ]\n            },\n            {\n              \"name\": \"pcode4\",\n              \"default\": null,\n              \"type\": [\n                \"null\",\n                \"int\"\n              ]\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"blockInfo\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        {\n          \"name\": \"blockInfo\",\n          \"type\": \"record\",\n          \"fields\": [\n            {\n              \"name\": \"code\",\n              \"default\": null,\n              \"type\": [\n                \"null\",\n                \"string\"\n              ]\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"addresses\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        {\n          \"type\": \"array\",\n          \"default\": null,\n          \"items\": [\n            \"null\",\n            {\n              \"name\": \"address\",\n              \"type\": \"record\",\n              \"fields\": [\n                {\n                  \"name\": \"lines\",\n                  \"default\": null,\n                  \"type\": [\n                    \"null\",\n                    {\n                      \"type\": \"array\",\n                      \"items\": \"string\"\n                    }\n                  ]\n                },\n                {\n                  \"name\": \"type\",\n                  \"default\": null,\n                  \"type\": [\n                    \"null\",\n                    \"string\"\n                  ]\n                }\n              ]\n            }\n          ]\n        }\n      ]\n    },\n    {\n      \"name\": \"phones\",\n      \"default\": null,\n      \"type\": [\n        \"null\",\n        {\n          \"type\": \"array\",\n          \"default\": null,\n          \"items\": [\n            \"null\",\n            {\n              \"name\": \"phone\",\n              \"type\": \"record\",\n              \"fields\": [\n                {\n                  \"name\": \"number\",\n                  \"default\": null,\n                  \"type\": [\n                    \"null\",\n                    \"string\"\n                  ]\n                },\n                {\n                  \"name\": \"type\",\n                  \"default\": null,\n                  \"type\": [\n                    \"null\",\n                    \"string\"\n                  ]\n                }\n              ]\n            }\n          ]\n        }\n      ]\n    }\n  ]\n}"
    },
    {
      "id": 282,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "Patron",
        "type": "record",
        "fields": [
          {
            "name": "simplePatron",
            "type": [
              {
                "name": "simplePatron",
                "type": "record",
                "fields": [
                  {
                    "name": "patron_id",
                    "type": "string"
                  },
                  {
                    "name": "barcode",
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "name",
                    "type": "string"
                  },
                  {
                    "name": "birthdate",
                    "default": null,
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "email",
                    "default": null,
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "address",
                    "type": {
                      "name": "address",
                      "type": "record",
                      "fields": [
                        {
                          "name": "line_1",
                          "type": "string"
                        },
                        {
                          "name": "line_2",
                          "default": null,
                          "type": [
                            "null",
                            "string"
                          ]
                        },
                        {
                          "name": "city",
                          "type": "string"
                        },
                        {
                          "name": "state",
                          "type": "string"
                        },
                        {
                          "name": "zip",
                          "type": "string"
                        }
                      ]
                    }
                  },
                  {
                    "name": "work_or_school_address",
                    "default": null,
                    "type": [
                      "null",
                      {
                        "name": "work_or_school_address",
                        "type": "record",
                        "fields": [
                          {
                            "name": "line_1",
                            "default": null,
                            "type": [
                              "null",
                              "string"
                            ]
                          },
                          {
                            "name": "line_2",
                            "default": null,
                            "type": [
                              "null",
                              "string"
                            ]
                          },
                          {
                            "name": "city",
                            "default": null,
                            "type": [
                              "null",
                              "string"
                            ]
                          },
                          {
                            "name": "state",
                            "default": null,
                            "type": [
                              "null",
                              "string"
                            ]
                          },
                          {
                            "name": "zip",
                            "default": null,
                            "type": [
                              "null",
                              "string"
                            ]
                          }
                        ]
                      }
                    ]
                  },
                  {
                    "name": "ecommunications_pref",
                    "default": null,
                    "type": [
                      "null",
                      "string"
                    ]
                  },
                  {
                    "name": "username",
                    "type": "string"
                  },
                  {
                    "name": "pin",
                    "type": "string"
                  },
                  {
                    "name": "policy_type",
                    "type": "string"
                  }
                ]
              }
            ]
          }
        ]
      },
      "stream": "Patron",
      "schema": "{\n  \"name\":\"Patron\",\n  \"type\":\"record\",\n  \"fields\":[\n    {\n      \"name\":\"simplePatron\",\n      \"type\":[\n        {\n          \"name\":\"simplePatron\",\n          \"type\":\"record\",\n          \"fields\":[\n            {\n              \"name\":\"patron_id\",\n              \"type\":\"string\"\n            },\n            {\n              \"name\":\"barcode\",\n              \"type\":[\n                \"null\",\n                \"string\"\n              ]\n            },\n            {\n              \"name\":\"name\",\n              \"type\":\"string\"\n            },\n            {\n              \"name\":\"birthdate\",\n              \"default\": null,\n              \"type\":[\n                \"null\",\n                \"string\"\n              ]\n            },\n            {\n              \"name\":\"email\",\n              \"default\": null,\n              \"type\":[\n                \"null\",\n                \"string\"\n              ]\n            },\n            {\n              \"name\":\"address\",\n              \"type\":\n              {\n                \"name\":\"address\",\n                \"type\":\"record\",\n                \"fields\":[\n                  {\n                    \"name\":\"line_1\",\n                    \"type\":\"string\"\n                  },\n                  {\n                    \"name\":\"line_2\",\n                    \"default\": null,\n                    \"type\":[\n                      \"null\",\n                      \"string\"\n                    ]\n                  },\n                  {\n                    \"name\":\"city\",\n                    \"type\":\"string\"\n                  },\n                  {\n                    \"name\":\"state\",\n                    \"type\":\"string\"\n                  },\n                  {\n                    \"name\":\"zip\",\n                    \"type\":\"string\"\n                  }\n                ]\n              }\n            },\n            {\n              \"name\":\"work_or_school_address\",\n              \"default\": null,\n              \"type\":[\n                \"null\",\n                {\n                  \"name\":\"work_or_school_address\",\n                  \"type\":\"record\",\n                  \"fields\":[\n                    {\n                      \"name\":\"line_1\",\n                      \"default\": null,\n                      \"type\":[\n                        \"null\",\n                        \"string\"\n                      ]\n                    },\n                    {\n                      \"name\":\"line_2\",\n                      \"default\": null,\n                      \"type\":[\n                        \"null\",\n                        \"string\"\n                      ]\n                    },\n                    {\n                      \"name\":\"city\",\n                      \"default\": null,\n                      \"type\":[\n                        \"null\",\n                        \"string\"\n                      ]\n                    },\n                    {\n                      \"name\":\"state\",\n                      \"default\": null,\n                      \"type\":[\n                        \"null\",\n                        \"string\"\n                      ]\n                    },\n                    {\n                      \"name\":\"zip\",\n                      \"default\": null,\n                      \"type\":[\n                        \"null\",\n                        \"string\"\n                      ]\n                    }\n                  ]\n                }\n              ]\n            },\n            {\n              \"name\":\"ecommunications_pref\",\n              \"default\": null,\n              \"type\":[\n                \"null\",\n                \"string\"\n              ]\n            },\n            {\n              \"name\":\"username\",\n              \"type\":\"string\"\n            },\n            {\n              \"name\":\"pin\",\n              \"type\":\"string\"\n            },\n            {\n              \"name\":\"policy_type\",\n              \"type\":\"string\"\n            }\n          ]\n        }\n      ]\n    }\n  ]\n}"
    },
    {
      "id": 264,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "RecapCancelHoldRequest",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "int"
          },
          {
            "name": "jobId",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "trackingId",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "patronBarcode",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "itemBarcode",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "owningInstitutionId",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "processed",
            "type": "boolean"
          },
          {
            "name": "success",
            "type": "boolean"
          },
          {
            "name": "createdDate",
            "type": [
              "null",
              "string"
            ]
          },
          {
            "name": "updatedDate",
            "type": [
              "null",
              "string"
            ]
          }
        ]
      },
      "stream": "RecapCancelHoldRequest",
      "schema": "{\"name\":\"RecapCancelHoldRequest\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"int\"},{\"name\":\"jobId\",\"type\":[\"null\",\"string\"]},{\"name\":\"trackingId\",\"type\":[\"null\",\"string\"]},{\"name\":\"patronBarcode\",\"type\":[\"null\",\"string\"]},{\"name\":\"itemBarcode\",\"type\":[\"null\",\"string\"]},{\"name\":\"owningInstitutionId\",\"type\":[\"null\",\"string\"]},{\"name\":\"processed\",\"type\":\"boolean\"},{\"name\":\"success\",\"type\":\"boolean\"},{\"name\":\"createdDate\",\"type\":[\"null\",\"string\"]},{\"name\":\"updatedDate\",\"type\":[\"null\",\"string\"]}]}"
    },
    {
      "id": 260,
      "offsetBegin": 0,
      "offsetEnd": 0,
      "schemaObject": {
        "name": "RecapHoldRequest",
        "type": "record",
        "fields": [
          {
            "name": "id",
            "type": "int"
          },
          {
            "name": "trackingId",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "patronBarcode",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "itemBarcode",
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
            "name": "updatedDate",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "owningInstitutionId",
            "type": [
              "string",
              "null"
            ]
          },
          {
            "name": "description",
            "type": [
              "null",
              {
                "name": "description",
                "type": "record",
                "fields": [
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
                    "name": "callNumber",
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
      "stream": "RecapHoldRequest",
      "schema": "{\"name\":\"RecapHoldRequest\",\"type\":\"record\",\"fields\":[{\"name\":\"id\",\"type\":\"int\"},{\"name\":\"trackingId\",\"type\":[\"string\",\"null\"]},{\"name\":\"patronBarcode\",\"type\":[\"string\",\"null\"]},{\"name\":\"itemBarcode\",\"type\":[\"string\",\"null\"]},{\"name\":\"createdDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"updatedDate\",\"type\":[\"string\",\"null\"]},{\"name\":\"owningInstitutionId\",\"type\":[\"string\",\"null\"]},{\"name\":\"description\",\"type\":[\"null\",{\"name\":\"description\",\"type\":\"record\",\"fields\":[{\"name\":\"title\",\"type\":[\"string\",\"null\"]},{\"name\":\"author\",\"type\":[\"string\",\"null\"]},{\"name\":\"callNumber\",\"type\":[\"string\",\"null\"]}]}]}]}"
    }
  ],
  "count": 25,
  "totalCount": 0,
  "statusCode": 200,
  "debugInfo": []
}
