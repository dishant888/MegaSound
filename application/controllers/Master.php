<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Master extends MY_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
		$this->load->model('state_model');
		$this->load->model('city_model');
		$this->load->model('customer_model');
		$this->load->model('venue_model');
		$this->load->model('artist_model');
		$this->load->model('genset_model');
		$this->load->model('boat_model');
		$this->load->model('brand_model');
		$this->load->model('expense_categories_model');
		$this->load->model('other_charge_model');
		$this->load->model('vendor_model');
		$this->load->model('tc_model');
		$this->load->model('categories_model');
		$this->load->model('item_model');
		$this->load->model('employee_model');
		$this->load->model('footer_content_model');
		$this->load->model('footer_service_model');
		$this->load->model('bank_model');
	}
// Customer section----------------------------------------------------------------------
	public function customer()
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		$data['title']='Customers';
		$result['states']=$this->state_model->getStates();
		$this->load->view('templates/header',$data);
		$this->load->view('customer/index',$result);
		$this->load->view('templates/footer');
	}

	public function check_email()
	{
		if($this->input->post('email'))
		{
			$result=$this->customer_model->checkEmail($this->input->post('email'));
			if($result==0)
				echo 1;
			else
				echo 0;
		}
	}

	public function city($city_code=FALSE)
	{
		if($city_code==FALSE)
		{
			if($this->input->post('state_id'))
			{
				$id=$this->input->post('state_id');
				echo $this->city_model->getCities($id);
			}else{
				echo $this->city_model->getCities();
			}
		}
		else
		{
			$id=$this->input->post('state_id');
			echo $this->city_model->getCities($id,$city_code);
		}
	}

	public function addCustomer($id=False)
	{
			$this->form_validation->set_rules('name','Name','required|trim');
			$this->form_validation->set_rules('address','Address','required|trim');
			$this->form_validation->set_rules('company','Company','required|trim');
			$this->form_validation->set_rules('state','State','required|trim');
			$this->form_validation->set_rules('contact','Contact','required|trim|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('gst','GST','required|trim');
			$this->form_validation->set_rules('city','City','required|trim');

		if($id==FALSE)
		{
			
			$this->form_validation->set_rules('email','E-mail','required|trim|valid_email|is_unique[customers.email]');

			if($this->form_validation->run()==TRUE)
			{
				$result=$this->customer_model->add();
				if($result)	
				{
					$this->session->set_flashdata('added','Customer Added Successfully...');
					redirect(base_url('master/customer'));
				}
			}else{
				$this->customer();
			}
		}
		else
		{
			
			$this->form_validation->set_rules('email','E-mail','required|trim|valid_email');

			if($this->form_validation->run()==TRUE)
			{
				$id=base64_decode($id);
				$result=$this->customer_model->add($id);
				if($result)
				{
					$id=base64_encode($id);
					$this->session->set_flashdata('updated','Customer Updated Successfully...');
					redirect(base_url('master/customerView/'.$id));
				}
			}
			else
			{
				$this->customerEdit($id);
			}
		}
	}

	public function customerView($id=FALSE)
	{
		if($id==FALSE)
		{
		$customers=$this->customer_model->getCustomers();
		$result='';$i=0;$msg='"Are you sure?"';
		foreach ($customers as $customer) {
			$result.="<tr><td>".++$i."</td>
                <td>".$customer->name."</td>
                <td>".$customer->company."</td>
                <td>".$customer->contact."</td>
                <td>".$customer->city."</td>
                <td>
                    <a href='".base_url('master/customerView/').base64_encode($customer->id)."' class='text-primary'><i class='fas fa-eye'></i></a>&nbsp&nbsp
                    <a href='".base_url('master/customerEdit/').base64_encode($customer->id)."' class='text-success'><i class='fas fa-pencil-alt'></i></a>&nbsp&nbsp
                    <a onclick='".'return confirm('.$msg.')'."' href='".base_url('master/customerDelete/').base64_encode($customer->id)."' class='text-danger'><i class='fas fa-times'></i></a>
                </td>
            </tr>";
		}
		echo json_encode($result);
		}
		else
		{
			$data['title'] = 'View Customer';
			$id=base64_decode($id);
			$result['details']=$this->customer_model->getCustomers($id);
			$this->load->view('templates/header',$data);
			$this->load->view('customer/view',$result);
			$this->load->view('templates/footer');
		}
	}

	public function customerEdit($id)
	{
		$id=base64_decode($id);
		$data['title'] = 'Edit Customer';
		$result['details']=$this->customer_model->getCustomers($id);
		$result['states']=$this->state_model->getStates();
		$this->load->view('templates/header',$data);
		$this->load->view('customer/view',$result);
		$this->load->view('templates/footer');
	}

	public function customerDelete($id)
	{
		$id=base64_decode($id);
		$result=$this->customer_model->delete($id);
		if($result)
		{
			$this->session->set_flashdata('deleted','Customer Deleted....');
			redirect(base_url('master/customer'));
		}
	}
// Customer section End
//-------------------------------------------------------------------------------------
// Venue section
	public function venue($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		$result['venues']=$this->venue_model->get();
		if($id==FALSE)
		{
			$data['title'] = 'Venues';
			$this->load->view('templates/header',$data);
			$this->load->view('venue/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$id=base64_decode($id);
			$data['title'] = 'Edit Venue';
			$result['details']=$this->venue_model->get($id);
			$this->load->view('templates/header',$data);
			$this->load->view('venue/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addVenue($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('venue','Venue','required|trim');
			$this->form_validation->set_rules('city','City','required|trim');
			if($this->form_validation->run()==TRUE)
			{
				$check=$this->venue_model->check($this->input->post('venue'),$this->input->post('city'));
				if($check==0)
				{
					$result=$this->venue_model->add();
					if($result)	
					{
						$this->session->set_flashdata('added','Venue Added Successfully...');
						redirect(base_url('master/venue'));
					}
				}
				else
				{
					$this->session->set_flashdata('error','This entry already exists...');
					redirect(base_url('master/venue'));
				}
			}
			else
			{
				$this->venue();
			}
		}
		else
		{
			$this->form_validation->set_rules('venue','Venue','required|trim');
			$this->form_validation->set_rules('city','City','required|trim');
			if($this->form_validation->run()==TRUE)
			{
				$check=$this->venue_model->check($this->input->post('venue'),$this->input->post('city'));
				if($check==0)
				{
					$result=$this->venue_model->add(base64_decode($id));
					if($result)	
					{
						$this->session->set_flashdata('updated','Venue Updated Successfully...');
						redirect(base_url('master/venue/'.$id));
					}
				}
				else
				{
					$this->session->set_flashdata('error','This entry already exists...');
					redirect(base_url('master/venue/'.$id));
				}
			}
			else
			{
				$this->venue($id);
			}
		}
	}

	public function deleteVenue($id)
	{
		$result=$this->venue_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Venue Deleted...');
			redirect(base_url('master/venue'));
		}
	}
// Venue section End
//-------------------------------------------------------------------------------------
//Artist section
	public function artist($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Artists';
			$result['artists']=$this->artist_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('artist/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Artist';
			$result['details']=$this->artist_model->get(base64_decode($id));
			$result['artists']=$this->artist_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('artist/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addArtist($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('artist','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->artist_model->check($this->input->post('artist'));
					if($check==0)
					{
						$result=$this->artist_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Artist Added Successfully...');
							redirect(base_url('master/artist'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Artist already exists...');
						redirect(base_url('master/artist'));
					}
				}
			else
			{
				$this->artist();
			}
		}
		else
		{
			$this->form_validation->set_rules('artist','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->artist_model->check($this->input->post('artist'));
					if($check==0)
					{
						$result=$this->artist_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Artist Updated Successfully...');
							redirect(base_url('master/artist/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Artist already exists...');
						redirect(base_url('master/artist/'.$id));
					}
				}
			else
			{
				$this->artist($id);
			}
		}
	}

	public function deleteArtist($id)
	{
		$result=$this->artist_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Artist Deleted...');
			redirect(base_url('master/artist'));
		}
	}
// Artist section End
//-------------------------------------------------------------------------------------
//Gentset section
	public function genset($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Gensets';
			$result['gensets']=$this->genset_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('genset/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Genset';
			$result['details']=$this->genset_model->get(base64_decode($id));
			$result['gensets']=$this->genset_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('genset/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addGenset($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('genset','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->genset_model->check($this->input->post('genset'));
					if($check==0)
					{
						$result=$this->genset_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Genset Added Successfully...');
							redirect(base_url('master/genset'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Genset already exists...');
						redirect(base_url('master/genset'));
					}
				}
			else
			{
				$this->genset();
			}
		}
		else
		{
			$this->form_validation->set_rules('genset','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					//$check=$this->genset_model->check($this->input->post('genset'));
					$check=0;
					if($check==0)
					{
						$result=$this->genset_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Genset Updated Successfully...');
							redirect(base_url('master/genset/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Gensets already exists...');
						redirect(base_url('master/genset/'.$id));
					}
				}
			else
			{
				$this->genset($id);
			}
		}
	}

	public function deleteGenset($id)
	{
		$result=$this->genset_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Genset Deleted...');
			redirect(base_url('master/genset'));
		}
	}
// Gentset section End
//-------------------------------------------------------------------------------------
// Boats section
	public function boat($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Boats';
			$result['boats']=$this->boat_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('boat/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Boats';
			$result['details']=$this->boat_model->get(base64_decode($id));
			$result['boats']=$this->boat_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('boat/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addBoat($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('boat','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->boat_model->check($this->input->post('boat'));
					if($check==0)
					{
						$result=$this->boat_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Boat Added Successfully...');
							redirect(base_url('master/boat'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Boat already exists...');
						redirect(base_url('master/boat'));
					}
				}
			else
			{
				$this->boat();
			}
		}
		else
		{
			$this->form_validation->set_rules('boat','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					//$check=$this->boat_model->check($this->input->post('boat'));
					$check=0;
					if($check==0)
					{
						$result=$this->boat_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Boat Updated Successfully...');
							redirect(base_url('master/boat/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Boat already exists...');
						redirect(base_url('master/boat/'.$id));
					}
				}
			else
			{
				$this->boat($id);
			}
		}
	}

	public function deleteBoat($id)
	{
		$result=$this->boat_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Boat Deleted...');
			redirect(base_url('master/boat'));
		}
	}
// Boats section End
//-------------------------------------------------------------------------------------
// Brands section
	public function brand($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Brands';
			$result['brands']=$this->brand_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('brand/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Brand';
			$result['details']=$this->brand_model->get(base64_decode($id));
			$result['brands']=$this->brand_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('brand/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addBrand($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('brand','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->brand_model->check($this->input->post('brand'));
					if($check==0)
					{
						$result=$this->brand_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Brand Added Successfully...');
							redirect(base_url('master/brand'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Brand already exists...');
						redirect(base_url('master/brand'));
					}
				}
			else
			{
				$this->brand();
			}
		}
		else
		{
			$this->form_validation->set_rules('brand','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->brand_model->check($this->input->post('brand'));
					if($check==0)
					{
						$result=$this->brand_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Brand Updated Successfully...');
							redirect(base_url('master/brand/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Brand already exists...');
						redirect(base_url('master/brand/'.$id));
					}
				}
			else
			{
				$this->brand($id);
			}
		}
	}

	public function deleteBrand($id)
	{
		$result=$this->brand_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','brand Deleted...');
			redirect(base_url('master/brand'));
		}
	}
// Brands section End
//-------------------------------------------------------------------------------------
// Expense section
	public function expense($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Expense';
			$result['expenses']=$this->expense_categories_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('expense/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Expense';
			$result['details']=$this->expense_categories_model->get(base64_decode($id));
			$result['expenses']=$this->expense_categories_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('expense/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addExpense($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('expense','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->expense_categories_model->check($this->input->post('expense'));
					if($check==0)
					{
						$result=$this->expense_categories_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Expense Category Added Successfully...');
							redirect(base_url('master/expense'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Category already exists...');
						redirect(base_url('master/expense'));
					}
				}
			else
			{
				$this->expense();
			}
		}
		else
		{
			$this->form_validation->set_rules('expense','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->expense_categories_model->check($this->input->post('expense'));
					if($check==0)
					{
						$result=$this->expense_categories_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Category Updated Successfully...');
							redirect(base_url('master/expense/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Category already exists...');
						redirect(base_url('master/expense/'.$id));
					}
				}
			else
			{
				$this->expense($id);
			}
		}
	}

	public function deleteExpense($id)
	{
		$result=$this->expense_categories_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Category Deleted...');
			redirect(base_url('master/expense'));
		}
	}
// Expense section End
//-------------------------------------------------------------------------------------
// Other Charges section
	public function charge($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Other Charges';
			$result['charges']=$this->other_charge_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('charge/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Other Charges';
			$result['details']=$this->other_charge_model->get(base64_decode($id));
			$result['charges']=$this->other_charge_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('charge/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addCharge($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('charge','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->other_charge_model->check($this->input->post('charge'));
					if($check==0)
					{
						$result=$this->other_charge_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Other Charges Added Successfully...');
							redirect(base_url('master/charge'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Charge already exists...');
						redirect(base_url('master/charge'));
					}
				}
			else
			{
				$this->charge();
			}
		}
		else
		{
			$this->form_validation->set_rules('charge','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->other_charge_model->check($this->input->post('charge'));
					if($check==0)
					{
						$result=$this->other_charge_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Charge Updated Successfully...');
							redirect(base_url('master/charge/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Charge already exists...');
						redirect(base_url('master/charge/'.$id));
					}
				}
			else
			{
				$this->charge($id);
			}
		}
	}

	public function deleteCharge($id)
	{
		$result=$this->other_charge_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Charge Deleted...');
			redirect(base_url('master/charge'));
		}
	}
// Other Charges End
//-------------------------------------------------------------------------------------
//  Vendor section

	public function vendor($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Vendors';
			$result['vendors']=$this->vendor_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('vendor/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Vendor';
			$result['details']=$this->vendor_model->get(base64_decode($id));
			$result['vendors']=$this->vendor_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('vendor/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addVendor($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('vendor','Name','required|trim');
			$this->form_validation->set_rules('contact','Contact','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->vendor_model->check($this->input->post('vendor'),$this->input->post('contact'));
					if($check==0)
					{
						$result=$this->vendor_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Vendor Added Successfully...');
							redirect(base_url('master/vendor'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Vendor already exists...');
						redirect(base_url('master/vendor'));
					}
				}
			else
			{
				$this->vendor();
			}
		}
		else
		{
			$this->form_validation->set_rules('vendor','Name','required|trim');
			$this->form_validation->set_rules('contact','Contact','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->vendor_model->check($this->input->post('vendor'),$this->input->post('contact'));
					if($check==0)
					{
						$result=$this->vendor_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Vendor Updated Successfully...');
							redirect(base_url('master/vendor/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Vendor already exists...');
						redirect(base_url('master/vendor/'.$id));
					}
				}
			else
			{
				$this->vendor($id);
			}
		}
	}

	public function deleteVendor($id)
	{
		$result=$this->vendor_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Vendor Deleted...');
			redirect(base_url('master/vendor'));
		}
	}
// Vendor section End
//-------------------------------------------------------------------------------------
//  T&C section
	public function terms($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Terms & Conditions';
			$result['terms']=$this->tc_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('tc/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Terms & Conditions';
			$result['details']=$this->tc_model->get(base64_decode($id));
			$result['terms']=$this->tc_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('tc/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addTerms($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('term','Description','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->tc_model->check($this->input->post('term'));
					if($check==0)
					{
						$result=$this->tc_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Terms & Conditions Added Successfully...');
							redirect(base_url('master/terms'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Entry already exists...');
						redirect(base_url('master/terms'));
					}
				}
			else
			{
				$this->terms();
			}
		}
		else
		{
			$this->form_validation->set_rules('term','Description','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->tc_model->check($this->input->post('term'));
					if($check==0)
					{
						$result=$this->tc_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Terms & Conditions Updated Successfully...');
							redirect(base_url('master/terms/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Terms & Conditions already exists...');
						redirect(base_url('master/terms/'.$id));
					}
				}
			else
			{
				$this->terms($id);
			}
		}
	}

	public function deleteTerms($id)
	{
		$result=$this->tc_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Terms & Condition Deleted...');
			redirect(base_url('master/terms'));
		}
	}
// T&C section End
//-------------------------------------------------------------------------------------
// Categories section
	public function categories($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Categories';
			$result['categories']=$this->categories_model->get();
			$result['options']=$this->categories_model->options();
			$this->load->view('templates/header',$data);
			$this->load->view('categories/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Categories';
			$result['details']=$this->categories_model->get(base64_decode($id));
			$result['categories']=$this->categories_model->get();
			$result['options']=$this->categories_model->options();
			$this->load->view('templates/header',$data);
			$this->load->view('categories/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addCategories($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('child','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->categories_model->check($this->input->post('child'),$this->input->post('parent'));
					if($check==0)
					{
						$result=$this->categories_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Category Added Successfully...');
							redirect(base_url('master/categories'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Category already exists...');
						redirect(base_url('master/categories'));
					}
				}
			else
			{
				$this->categories();
			}
		}
		else
		{
			$this->form_validation->set_rules('child','Name','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->categories_model->check($this->input->post('child'),$this->input->post('parent'));
					if($check==0)
					{
						$result=$this->categories_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Category Updated Successfully...');
							redirect(base_url('master/categories/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Category already exists...');
						redirect(base_url('master/categories/'.$id));
					}
				}
			else
			{
				$this->categories($id);
			}
		}
	}

	public function deleteCategories($id)
	{
		$result=$this->categories_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Category Deleted...');
			redirect(base_url('master/categories'));
		}
	}
// Categories section End
//-------------------------------------------------------------------------------------
// item section
	public function item()
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		$data['title'] = 'Items';
		$result['brands'] = $this->brand_model->get();
		$result['categories'] = $this->categories_model->get();
		$result['items'] = $this->item_model->get();
		$this->load->view('templates/header',$data);
		$this->load->view('item/index',$result);
		$this->load->view('templates/footer');
	}

	public function addItem($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('item','Item Name','required|trim');
			$this->form_validation->set_rules('cost','Cost','required|trim|is_natural_no_zero');
			$this->form_validation->set_rules('brand','Brand','required|trim');
			$this->form_validation->set_rules('category','Cateegory','required|trim');
			$this->form_validation->set_rules('description','Description','required|trim');

			if($this->form_validation->run()==TRUE)
			{
				$result=$this->item_model->add();
				if($result)	
				{
					$this->session->set_flashdata('added','Item Added Successfully...');
					redirect(base_url('master/item'));
				}
			}else{
				$this->item();
			}
		}
		else
		{
			$this->form_validation->set_rules('item','Item Name','required|trim');
			$this->form_validation->set_rules('cost','Cost','required|trim|is_natural_no_zero');
			$this->form_validation->set_rules('brand','Brand','required|trim');
			$this->form_validation->set_rules('category','Cateegory','required|trim');
			$this->form_validation->set_rules('description','Description','required|trim');

			if($this->form_validation->run()==TRUE)
			{
				$result=$this->item_model->add(base64_decode($id));
				if($result)	
				{
					$this->session->set_flashdata('updated','Item Updated Successfully...');
					redirect(base_url('master/viewItem/'.$id));
				}
			}else{
				$this->editItem($id);
			}
		}
	}

	public function viewItem($id)
	{
		$data['title']='View Item';
		$result['brands'] = $this->brand_model->get();
		$result['categories'] = $this->categories_model->get();
		$result['details']=$this->item_model->get(base64_decode($id));
		$this->load->view('templates/header',$data);
		$this->load->view('item/view',$result);
		$this->load->view('templates/footer');
	}

	public function editItem($id)
	{
		$data['title']='View Item';
		$result['brands'] = $this->brand_model->get();
		$result['categories'] = $this->categories_model->get();
		$result['details']=$this->item_model->get(base64_decode($id));
		$this->load->view('templates/header',$data);
		$this->load->view('item/view',$result);
		$this->load->view('templates/footer');
	}

	public function deleteItem($id)
	{
		$result=$this->item_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Item Deleted....');
			redirect(base_url('master/item'));
		}
	}
// item section End
//-------------------------------------------------------------------------------------
// Employee section
	public function employee($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		if($id==FALSE)
		{
			$data['title'] = 'Employee';
			$result['employees']=$this->employee_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('employee/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Employee';
			$result['details']=$this->employee_model->get(base64_decode($id));
			$result['employees']=$this->employee_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('employee/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addEmployee($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('employee','Name','required|trim');
			$this->form_validation->set_rules('contact','Contact','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->vendor_model->check($this->input->post('employee'),$this->input->post('contact'));
					if($check==0)
					{
						$result=$this->employee_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Employee Added Successfully...');
							redirect(base_url('master/employee'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Employee already exists...');
						redirect(base_url('master/employee'));
					}
				}
			else
			{
				$this->employee();
			}
		}
		else
		{
			$this->form_validation->set_rules('employee','Name','required|trim');
			$this->form_validation->set_rules('contact','Contact','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->vendor_model->check($this->input->post('employee'),$this->input->post('contact'));
					if($check==0)
					{
						$result=$this->employee_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Employee Updated Successfully...');
							redirect(base_url('master/employee/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Employee already exists...');
						redirect(base_url('master/employee/'.$id));
					}
				}
			else
			{
				$this->employee($id);
			}
		}
	}

	public function deleteEmployee($id)
	{
		$result=$this->employee_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Employee Deleted...');
			redirect(base_url('master/employee'));
		}
	}
// Employee section End
//-------------------------------------------------------------------------------------
// Bank section
	public function bank($id=FALSE)
	{
		if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}	
		if($id==FALSE)
		{
			$data['title'] = 'Bank Details';
			$result['banks']=$this->bank_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('bank/index',$result);
			$this->load->view('templates/footer');
		}
		else
		{
			$data['title'] = 'Edit Bank Details';
			$result['details']=$this->bank_model->get(base64_decode($id));
			$result['banks']=$this->bank_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('bank/index',$result);
			$this->load->view('templates/footer');
		}
	}

	public function addBank($id=FALSE)
	{
		if($id==FALSE)
		{
			$this->form_validation->set_rules('bank','Name','required|trim');
			$this->form_validation->set_rules('description','Description','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->bank_model->check($this->input->post('bank'),$this->input->post('description'));
					if($check==0)
					{
						$result=$this->bank_model->add();
						if($result)	
						{
							$this->session->set_flashdata('added','Details Added Successfully...');
							redirect(base_url('master/bank'));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Entry already exists...');
						redirect(base_url('master/bank'));
					}
				}
			else
			{
				$this->bank();
			}
		}
		else
		{
			$this->form_validation->set_rules('bank','Name','required|trim');
			$this->form_validation->set_rules('description','Description','required|trim');
			if($this->form_validation->run()==TRUE)
				{
					$check=$this->bank_model->check($this->input->post('bank'),$this->input->post('description'));
					if($check==0)
					{
						$result=$this->bank_model->add(base64_decode($id));
						if($result)	
						{
							$this->session->set_flashdata('updated','Dedtails Updated Successfully...');
							redirect(base_url('master/bank/'.$id));
						}
					}
					else
					{
						$this->session->set_flashdata('error','This Entry already exists...');
						redirect(base_url('master/bank/'.$id));
					}
				}
			else
			{
				$this->bank($id);
			}
		}
	}

	public function deleteBank($id)
	{
		$result=$this->bank_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Bank Deleted...');
			redirect(base_url('master/bank'));
		}
	}
// Bank section End
//-------------------------------------------------------------------------------------
// Footer Content Start
    public function FooterContent()
	{
	    if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		    $data['title'] = 'Footer Content';
			$result['contents']=$this->footer_content_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('footer_content/index',$result);
			$this->load->view('templates/footer');
	}
	
	public function addFooterContent()
	{
    	$this->form_validation->set_rules('description','Description','required|trim');
		if($this->form_validation->run()==TRUE)
			{
				$check=$this->footer_content_model->check($this->input->post('description'));
				if($check==0)
				{
					$result=$this->footer_content_model->add();
					if($result)	
					{
						$this->session->set_flashdata('added','Details Added Successfully...');
						redirect(base_url('master/FooterContent'));
					}
				}
				else
				{
					$this->session->set_flashdata('error','This Entry already exists...');
					redirect(base_url('master/FooterContent'));
				}
			}
		else
		{
			$this->FooterContent();
		}
	}
	
	public function deleteFooterContent($id)
	{
		$result=$this->footer_content_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Deleted...');
			redirect(base_url('master/FooterContent'));
		}
	}
// Footer Content End
//-------------------------------------------------------------------------------------
// Footer Service Start
    public function FooterService()
	{
	    if($this->session->userdata['user_rights']['permission'] == 0)
		{
			redirect(base_url('admin/unauthorized'));
		}
		    $data['title'] = 'Footer Service';
			$result['services']=$this->footer_service_model->get();
			$this->load->view('templates/header',$data);
			$this->load->view('footer_service/index',$result);
			$this->load->view('templates/footer');
	}
	
	public function addFooterService()
	{
    	$this->form_validation->set_rules('description','Description','required|trim');
		if($this->form_validation->run()==TRUE)
			{
				$check=$this->footer_service_model->check($this->input->post('description'));
				if($check==0)
				{
					$result=$this->footer_service_model->add();
					if($result)	
					{
						$this->session->set_flashdata('added','Details Added Successfully...');
						redirect(base_url('master/FooterService'));
					}
				}
				else
				{
					$this->session->set_flashdata('error','This Entry already exists...');
					redirect(base_url('master/FooterService'));
				}
			}
		else
		{
			$this->FooterService();
		}
	}
	
	public function deleteFooterService($id)
	{
		$result=$this->footer_service_model->delete(base64_decode($id));
		if($result)
		{
			$this->session->set_flashdata('deleted','Deleted...');
			redirect(base_url('master/FooterService'));
		}
	}
}
 ?>