
from fastapi import FastAPI
from starlette.middleware.cors import CORSMiddleware
from repository.schema import Cal
from di import (service_cal_inject)
import datetime
import json

app = FastAPI()

app.add_middleware(
    CORSMiddleware,
    allow_origins=["*"],
    allow_credentials=True,
    allow_methods=["*"],
    allow_headers=["*"],
)


''' http://localhost:7777/docs '''

@app.get("/", tags=['API'],  
         status_code=200,
         description="Default GET API", 
         summary="Return Json")
async def root():
    print('root')
    return {"message": "Hello World"}


@app.post("/cal", description="Calculate via REST-API", summary="Calculate via REST-API")
async def calculate(request: Cal):
    ''' Calculate via REST-API '''
    StartTime, EndTime, Delay_Time = 0, 0, 0
    
    try:
        StartTime = datetime.datetime.now()
     
        request_json = request.to_json()
        print("calculate : {}".format(json.dumps(request_json, indent=2)))
        
        EndTime = datetime.datetime.now()

        Delay_Time = str((EndTime - StartTime).seconds) + '.' + str((EndTime - StartTime).microseconds).zfill(6)[:2]
        
        result = await service_cal_inject.excute_cal(arg1=request_json.get('args1'), 
                                            arg2=request_json.get('args2'), 
                                            operator=request_json.get('operator')
                                            )
        print('response - {}'.format(result))
        return {'result' : result}
        
    except Exception as e:
        print(e)