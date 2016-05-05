<?php

class DashboardController extends Controller
{
      
	public function actionIndex()
	{
		$users = new Users('search');
		$users->unsetAttributes();

		$solicitors = new Solicitor('search');
		$solicitors->unsetAttributes();

		$donations = new Donation('search');
		$donations->unsetAttributes();

		$payments = new SolicitorCredit('search');
		$payments->unsetAttributes();

		$user = Users::model()->count();
		$solicitor = Solicitor::model()->count();

		$donation = BaseModel::getAll("Donation");
		$t_donation = 0;
		foreach($donation as $d){
			$t_donation = $t_donation + $d->amount;
		}

		$debit = BaseModel::getAll("SolicitorCredit");
		$t_debit = 0;
		foreach ($debit as $d) {
			$t_debit = $t_debit + $d->amount;
		}

		$this->render('index',array(
									'users'=>$users,
									'solicitors'=>$solicitors,
									'donations'=>$donations,
									'payments'=>$payments,
									'user' => $user,
									'solicitor' => $solicitor,
									't_donation' => $t_donation,
									't_debit' => $t_debit
									));
	}

	public function gridVisit($data, $row) {
        $visit = $data->visit_id;
        $code = Visits::model()->findByPk($visit)->visit_code;
        return $code;
    }

    public function gridSolicitor($data, $row) {
        $solicitor = $data->solicitor_id;
        $code = Solicitor::model()->findByPk($solicitor);
        return $code->first_name.' '.$code->last_name.'('.$code->solicitor_code.')';
    }

    public function gridUser($data, $row) {
        $solicitor = $data->user_id;
        $code = Users::model()->findByPk($solicitor);
        return $code->first_name.' '.$code->last_name.'('.$code->username.')';
    }
        
}