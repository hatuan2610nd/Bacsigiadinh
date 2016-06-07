package com.mta.th10.bacsigiadinh.fragments;

import com.mta.th10.bacsigiadinh.R;

import android.os.Bundle;
import android.support.v4.app.Fragment;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import mta.th10.bacsigiadinh.interfaces.ITitleFragment;

public class TinhChiSoFragment extends Fragment implements ITitleFragment {
	Button bt;
	TextView txt_diem;
	TextView txt_thongBao;

	TextView txt_chieucao;
	TextView txt_cannang;

	String l1 = "GẦY: Nguy cơ thiếu dinh dưỡng và loãng xương!";
	String L0 = "KHOE MẠNH!";
	String h1 = "THỪA CÂN!";
	String h2 = "BÉO PHÌ! Nguy cơ mắc bệnh về tim mạch, huyết áp cao, đột quỵ, tiểu đường,...";

	@Override
	public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState) {
		View v = inflater.inflate(R.layout.fragment_main_tinhchiso, container, false);
		bt = (Button) v.findViewById(R.id.bmi_bt_tinh);
		txt_diem = (TextView) v.findViewById(R.id.bmi_result);
		txt_thongBao = (TextView) v.findViewById(R.id.txt_ketqua);
		txt_chieucao = (TextView) v.findViewById(R.id.txt_bmi_chieucao);
		txt_cannang = (TextView) v.findViewById(R.id.txt_bmi_cannang);
		bt.setOnClickListener(new View.OnClickListener() {
			@Override
			public void onClick(View v) {

				float chieuCao = Float.parseFloat(txt_chieucao.getText().toString());
				float canNang = Float.parseFloat(txt_cannang.getText().toString());
				canNang = canNang <= 1 ? 1 : canNang;
				chieuCao = chieuCao / 100.0f;

				float kq = canNang / (chieuCao * chieuCao);

				txt_diem.setText(String.format("%.1f%n", kq));
				if (kq < 15)
					txt_thongBao.setText("THIẾU CÂN RẤT TRẦM TRỌNG");
				if (kq >= 15 && kq < 16)
					txt_thongBao.setText("THIẾU CÂN TRẦM TRỌNG");
				if (kq >= 15 && kq < 18.5)
					txt_thongBao.setText("THIẾU CÂN");
				if (kq >= 18.5 && kq < 25)
					txt_thongBao.setText("BÌNH THƯỜNG");
				if (kq >= 25 && kq < 30)
					txt_thongBao.setText("THỪA CÂN");
				if (kq >= 30 && kq < 35)
					txt_thongBao.setText("BÉO PHÌ MỨC I");
				if (kq >= 35 && kq < 40)
					txt_thongBao.setText("BÉO PHÌ MỨC II: TRẦM TRỌNG");
				if (kq >= 40)
					txt_thongBao.setText("BÉO PHÌ MỨC III: RẤT TRẦM TRỌNG");

			}
		});

		return v;
	}

	@Override
	public String getTitle() {
		return "Chỉ số BMI";
	}

	@Override
	public void onStart() {
		Log.d("xxxxx", "onStart");
		super.onStart();
	}

	@Override
	public void onStop() {
		Log.d("xxxxx", "onStop");
		super.onStop();
	}
}
