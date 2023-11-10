
import pytest

@pytest.mark.parametrize(
   "args1, args2, operator, result",
   [
       (1,1,'+',2),
       (1,1,'-',0),
       (1,1,'*',1),
       (1,1,'/',1),
       (2,2,'+',4),
       (2,2,'-',0),
       (2,2,'*',4),
       (2,2,'/',1)
   ]
)
def test_cal(mock_client, args1, args2, operator, result):
    sample_payload = {
        "args1": int(args1),
        "args2": int(args2),
        "operator": str(operator)
    }
    
    response = mock_client.post("/cal", json=sample_payload)
    assert response.status_code == 200
    assert response.json() == {
        "result": int(result)
    }
