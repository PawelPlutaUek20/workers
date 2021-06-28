# Your task is to create a simple Rest API that manages workers of some company.

## Worker table:

| Field         | Type          |
| ------------- |:------------- |
| ``name``      | ``varchar``   |
| ``surname``   | ``varchar``   |
| ``salary``    | ``decimal``   |
| ``currency``  | ``char``      |
| ``id``        | ``uuid``      |
| ``city``      | ``varchar``   |
| ``street``    | ``varchar``   |
| ``zip``       |  ``char``     |
| ``type``      | ``set``       |

## Endpoints:

| Method     | Url                 | Action                                                                              |
| ---------- |:------------------- |:----------------------------------------------------------------------------------- |
| ``POST``   | ``/workers``        | ``create new worker from data in body``                                             |
| ``GET``    | ``/workers/{uuid}`` | ``return worker by given UUID``                                                     |
| ``GET``    | ``/workers``        | ``return list of workers``                                                          |
| ``DELETE`` | ``/workers/{uuid}`` | ``delete worker by given UUID``                                                     |
| ``GET``    | ``/salary_details`` | ``return JSON with average salary general and average salary for each worker type`` |